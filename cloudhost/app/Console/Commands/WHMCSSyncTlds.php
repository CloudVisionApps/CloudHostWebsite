<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\WhoisWhmcsService;
use App\Models\Domain;

class WHMCSSyncTlds extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'whmcs:sync-tlds {--dry-run} {--delete-missing}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync WHMCS TLD pricing into the domains table';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        /** @var WhoisWhmcsService $whmcs */
        $whmcs = app(WhoisWhmcsService::class);

        $this->info('Fetching TLD pricing from WHMCS...');
        $pricing = $whmcs->getDomainPricing();

        if (empty($pricing) || !is_array($pricing)) {
            $this->error('No pricing data returned from WHMCS. Aborting.');
            return 1;
        }

        // Helper to parse a price value possibly including a currency suffix (e.g., "12.34EUR")
        $parsePrice = function ($value) {
            if ($value === null) {
                return [null, null];
            }
            // If numeric already
            if (is_numeric($value)) {
                return [floatval($value), null];
            }
            // If string with possible currency suffix
            if (is_string($value)) {
                // Match amount and optional ISO currency letters at the end
                if (preg_match('/^\s*([0-9]+(?:\.[0-9]+)?)\s*([A-Z]{3})?\s*$/', $value, $m)) {
                    $amount = isset($m[1]) ? (float) $m[1] : null;
                    $currency = $m[2] ?? null;
                    return [$amount, $currency];
                }
                // Also handle comma decimals if any
                if (preg_match('/^\s*([0-9]+(?:,[0-9]+)?)\s*([A-Z]{3})?\s*$/', $value, $m)) {
                    $amount = isset($m[1]) ? (float) str_replace(',', '.', $m[1]) : null;
                    $currency = $m[2] ?? null;
                    return [$amount, $currency];
                }
            }
            return [null, null];
        };

        $dryRun = (bool) $this->option('dry-run');
        $deleteMissing = (bool) $this->option('delete-missing');
        $synced = 0;
        $updated = 0;
        $created = 0;
        $skipped = 0;
        $deleted = 0;

        foreach ($pricing as $tld => $data) {
            if (!is_string($tld) || !is_array($data)) {
                $skipped++;
                continue;
            }

            // Normalize TLD to start with a dot
            if ($tld !== '' && $tld[0] !== '.') {
                $tld = '.' . $tld;
            }

            // Extract 1-year prices; values might be numeric or strings with currency suffix
            $registerRaw = isset($data['register']) && is_array($data['register'])
                ? ($data['register']['1'] ?? $data['register']['1y'] ?? $data['register']['1yr'] ?? null)
                : null;
            $renewRaw = isset($data['renew']) && is_array($data['renew'])
                ? ($data['renew']['1'] ?? $data['renew']['1y'] ?? $data['renew']['1yr'] ?? null)
                : null;
            $transferRaw = isset($data['transfer']) && is_array($data['transfer'])
                ? ($data['transfer']['1'] ?? $data['transfer']['1y'] ?? $data['transfer']['1yr'] ?? null)
                : null;

            [$register, $curA] = $parsePrice($registerRaw);
            [$renew, $curB] = $parsePrice($renewRaw);
            [$transfer, $curC] = $parsePrice($transferRaw);

            // Try to infer currency from grace/redemption fees if still unknown
            $curD = null;
            if (isset($data['grace_period_fee'])) {
                [, $curD] = $parsePrice($data['grace_period_fee']);
            }
            $curE = null;
            if (isset($data['redemption_period_fee'])) {
                [, $curE] = $parsePrice($data['redemption_period_fee']);
            }

            $currency = $curA ?? $curB ?? $curC ?? $curD ?? $curE ?? env('WHMCS_DEFAULT_CURRENCY', 'EUR');

            // Category: use first from categories array if present, else group, else fallback
            $category = 'Standard';
            if (!empty($data['categories']) && is_array($data['categories'])) {
                $firstCategory = reset($data['categories']);
                if (is_string($firstCategory) && $firstCategory !== '') {
                    $category = $firstCategory;
                }
            } elseif (!empty($data['group']) && is_string($data['group'])) {
                $category = $data['group'] !== '' ? $data['group'] : $category;
            }

            // Skip if no useful price data present
            if ($register === null && $renew === null && $transfer === null) {
                $this->warn("Skipping {$tld}: no price data for 1 year.");
                $skipped++;
                continue;
            }

            $payload = [
                'category' => $category,
                'registration_yearly_price' => $register,
                'renewal_yearly_price' => $renew,
                'transfer_yearly_price' => $transfer,
                'currency' => $currency,
            ];

            if ($dryRun) {
                $exists = Domain::where('tld', $tld)->exists();
                $action = $exists ? 'UPDATE' : 'CREATE';
                $this->line("[DRY-RUN] {$action} {$tld} -> " . json_encode($payload));
                $synced++;
                continue;
            }

            $domain = Domain::where('tld', $tld)->first();
            if ($domain) {
                $domain->update($payload);
                $updated++;
            } else {
                Domain::create(array_merge(['tld' => $tld], $payload));
                $created++;
            }

            $synced++;
        }

        // Handle deletion of TLDs not present in WHMCS
        if ($deleteMissing) {
            $this->info('Checking for TLDs to delete...');

            // Get all TLDs from WHMCS response (normalized with dots)
            $whmcsTlds = [];
            foreach ($pricing as $tld => $data) {
                if (is_string($tld) && is_array($data)) {
                    $normalizedTld = $tld;
                    if ($normalizedTld !== '' && $normalizedTld[0] !== '.') {
                        $normalizedTld = '.' . $normalizedTld;
                    }
                    $whmcsTlds[] = $normalizedTld;
                }
            }

            // Find TLDs in database that are not in WHMCS
            $tldsToDelete = Domain::whereNotIn('tld', $whmcsTlds)->get();

            if ($tldsToDelete->count() > 0) {
                $this->warn("Found {$tldsToDelete->count()} TLDs in database not present in WHMCS:");
                foreach ($tldsToDelete as $domain) {
                    $this->line("  - {$domain->tld} (ID: {$domain->id})");
                }

                if ($dryRun) {
                    $this->info("[DRY-RUN] Would delete {$tldsToDelete->count()} TLDs");
                    $deleted = $tldsToDelete->count();
                } else {
                    $deletedCount = Domain::whereNotIn('tld', $whmcsTlds)->delete();
                    $this->info("Deleted {$deletedCount} TLDs not present in WHMCS");
                    $deleted = $deletedCount;
                }
            } else {
                $this->info('No TLDs to delete - all database TLDs are present in WHMCS');
            }
        }

        $this->info("Sync complete. Total: {$synced}, Created: {$created}, Updated: {$updated}, Skipped: {$skipped}, Deleted: {$deleted}");
        return 0;
    }
}
