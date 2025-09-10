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
    protected $signature = 'whmcs:sync-products {--dry-run} {--delete-missing}';

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
        $deleteMissing = (bool) $this->option('delete-missing');

        $this->info('Fetching products from WHMCS...');

        // Fetch all products directly (without groups for now)
        $products = $whmcs->callWhmcsApi('GetProducts');

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

        $syncedGroups = 0;
        $createdGroups = 0;
        $updatedGroups = 0;
        $syncedProducts = 0;
        $createdProducts = 0;
        $updatedProducts = 0;
        $skippedProducts = 0;
        $deletedProducts = 0;

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

            if ($dryRun) {
                $exists = Plan::where('name', $productData['name'])->exists();
                $action = $exists ? 'UPDATE' : 'CREATE';
                $this->line("[DRY-RUN] PRODUCT {$action}: {$productData['name']} - {$currency} {$monthlyPrice}/month");
                $syncedProducts++;
                continue;
            }

            $plan = Plan::updateOrCreate(
                ['name' => $productData['name']],
                $productData
            );

            if ($plan->wasRecentlyCreated) {
                $createdProducts++;
            } else {
                $updatedProducts++;
            }
            $syncedProducts++;
        }

        // Handle deletion of products not present in WHMCS
        if ($deleteMissing) {
            $this->info('Checking for products to delete...');

            // Get all product IDs from WHMCS
            $whmcsProductIds = [];
            foreach ($productList as $product) {
                $whmcsProductIds[] = $product['pid'];
            }

            // Find products in database that are not in WHMCS
            $productsToDelete = Plan::whereNotIn('id', $whmcsProductIds)->get();

            if ($productsToDelete->count() > 0) {
                $this->warn("Found {$productsToDelete->count()} products in database not present in WHMCS:");
                foreach ($productsToDelete as $product) {
                    $this->line("  - {$product->name} (ID: {$product->id})");
                }

                if ($dryRun) {
                    $this->info("[DRY-RUN] Would delete {$productsToDelete->count()} products");
                    $deletedProducts = $productsToDelete->count();
                } else {
                    $deletedCount = Plan::whereNotIn('id', $whmcsProductIds)->delete();
                    $this->info("Deleted {$deletedCount} products not present in WHMCS");
                    $deletedProducts = $deletedCount;
                }
            } else {
                $this->info('No products to delete - all database products are present in WHMCS');
            }
        }

        $this->info("Products - Total: {$syncedProducts}, Created: {$createdProducts}, Updated: {$updatedProducts}, Skipped: {$skippedProducts}, Deleted: {$deletedProducts}");
        return 0;
    }
}
