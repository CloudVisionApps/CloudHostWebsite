<?php

namespace App\Console\Commands;

use App\Models\Plan;
use App\Models\PlanGroup;
use App\Services\WhoisWhmcsService;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class WHMCSSyncProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'whmcs:sync-products {--dry-run}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync WHMCS products and product groups with the local database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        /** @var WhoisWhmcsService $whmcs */
        $whmcs = app(WhoisWhmcsService::class);

        $dryRun = (bool) $this->option('dry-run');

        $this->info('Fetching products from WHMCS...');

        // Fetch all products directly (try different parameters to get all products)
        $products = $whmcs->callWhmcsApi('GetProducts', ['limit' => 1000]);

        if (empty($products['products']['product'])) {
            $this->error('No products returned from WHMCS. Aborting.');
            return 1;
        }

        $productList = $products['products']['product'];
        if (!is_array($productList)) {
            $productList = [$productList]; // Handle single product case
        }

        // Create a default group for products without groups
        $defaultGroup = PlanGroup::firstOrCreate(
            ['name' => 'Default Group'],
            [
                'name' => 'Default Group',
                'slug' => 'default-group',
                'description' => 'Default product group for WHMCS products',
                'sort_order' => 0,
                'icon' => null,
                'icon_color' => null,
            ]
        );

        $syncedProducts = 0;
        $createdProducts = 0;
        $updatedProducts = 0;
        $skippedProducts = 0;

        // Process products directly
        foreach ($productList as $product) {
            // Extract pricing information
            $pricing = $product['pricing'] ?? [];
            $monthlyPrice = null;
            $yearlyPrice = null;
            $currency = 'USD';

            // Try to get pricing for different currencies
            foreach (['USD', 'EUR', 'BGN'] as $curr) {
                if (isset($pricing[$curr])) {
                    $monthlyPrice = (float) ($pricing[$curr]['monthly'] ?? 0);
                    $yearlyPrice = (float) ($pricing[$curr]['annually'] ?? 0);
                    $currency = $curr;
                    break;
                }
            }

            // If no pricing found, try default structure
            if ($monthlyPrice === null && !empty($pricing)) {
                $firstCurrency = array_keys($pricing)[0];
                $monthlyPrice = (float) ($pricing[$firstCurrency]['monthly'] ?? 0);
                $yearlyPrice = (float) ($pricing[$firstCurrency]['annually'] ?? 0);
                $currency = $firstCurrency;
            }

            // Skip products without pricing
            if ($monthlyPrice === null || $monthlyPrice <= 0) {
                $this->warn("Skipping product '{$product['name']}' - no valid pricing");
                $skippedProducts++;
                continue;
            }

            $productData = [
                'name' => $product['name'] ?? 'Unnamed Product',
                'slug' => Str::slug($product['name'] ?? 'unnamed-product'),
                'description' => $product['description'] ?? null,
                'monthly_price' => $monthlyPrice,
                'yearly_price' => $yearlyPrice > 0 ? $yearlyPrice : null,
                'currency' => $currency,
                'storage_gb' => extractNumericValue($product['diskquota'] ?? '0'),
                'bandwidth_gb' => extractNumericValue($product['bwlimit'] ?? '0'),
                'domains' => extractNumericValue($product['maxdomains'] ?? '0'),
                'subdomains' => extractNumericValue($product['maxsubdomains'] ?? '0'),
                'databases' => extractNumericValue($product['maxsql'] ?? '0'),
                'email_accounts' => extractNumericValue($product['maxemail'] ?? '0'),
                'ftp_accounts' => extractNumericValue($product['maxftp'] ?? '0'),
                'ssl_certificate' => $product['ssl'] ?? false,
                'backup' => $product['backup'] ?? false,
                'support_24_7' => $product['support'] ?? false,
                'is_featured' => $product['featured'] ?? false,
                'is_active' => ($product['status'] ?? 'Active') === 'Active',
                'features' => [],
                'sort_order' => $product['order'] ?? 0,
                'group_id' => $defaultGroup->id,
            ];

            // Check if plan already exists by name or slug (including soft-deleted)
            $existingPlanByName = Plan::withTrashed()->where('name', $productData['name'])->first();
            $existingPlanBySlug = Plan::withTrashed()->where('slug', $productData['slug'])->first();


            $existingPlan = $existingPlanByName ?: $existingPlanBySlug;

            if ($dryRun) {
                $action = $existingPlan ? 'UPDATE' : 'CREATE';
                $conflict = '';
                if ($existingPlan) {
                    if ($existingPlan->name !== $productData['name']) {
                        $conflict = ' (SLUG CONFLICT)';
                    }
                }
                $this->line("[DRY-RUN] PRODUCT {$action}: {$productData['name']} - {$currency} {$monthlyPrice}/month{$conflict}");
                $syncedProducts++;
                continue;
            }

            if ($existingPlan) {
                // Check for slug conflicts
                if ($existingPlan->name !== $productData['name']) {
                    $this->warn("Slug conflict: Plan '{$existingPlan->name}' already has slug '{$productData['slug']}', updating instead of creating '{$productData['name']}'");
                }

                // If plan is soft-deleted, restore it first
                if ($existingPlan->trashed()) {
                    $this->info("Restoring soft-deleted plan: {$existingPlan->name}");
                    $existingPlan->restore();
                }

                // Update existing plan
                $existingPlan->update($productData);
                $updatedProducts++;
            } else {
                // Create new plan
                $plan = Plan::create($productData);
                $createdProducts++;
            }
            $syncedProducts++;
        }


        $this->info("Products - Total: {$syncedProducts}, Created: {$createdProducts}, Updated: {$updatedProducts}, Skipped: {$skippedProducts}");
        return 0;
    }
}
