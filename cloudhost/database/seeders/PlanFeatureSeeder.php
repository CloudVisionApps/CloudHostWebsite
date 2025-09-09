<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PlanFeature;
use App\Models\Plan;
use App\Models\PlanFeatureGroup;

class PlanFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get feature group IDs
        $groupIds = $this->getFeatureGroupIds();

        // Create core features (included in plans)
        $coreFeatures = [
            [
                'name' => 'SSL Certificate',
                'slug' => 'ssl-certificate',
                'description' => 'Free SSL certificate for secure connections',
                'icon' => 'fas-lock',
                'type' => 'boolean',
                'is_addon' => false,
                'is_active' => true,
                'sort_order' => 1,
                'group_id' => $groupIds['security'],
            ],
            [
                'name' => 'Daily Backups',
                'slug' => 'daily-backups',
                'description' => 'Automated daily backups of your website',
                'icon' => 'fas-cloud-arrow-down',
                'type' => 'boolean',
                'is_addon' => false,
                'is_active' => true,
                'sort_order' => 2,
                'group_id' => $groupIds['security'],
            ],
            [
                'name' => '24/7 Support',
                'slug' => '24-7-support',
                'description' => 'Round-the-clock technical support',
                'icon' => 'fas-comments',
                'type' => 'boolean',
                'is_addon' => false,
                'is_active' => true,
                'sort_order' => 3,
                'group_id' => $groupIds['server'],
            ],
            [
                'name' => 'Storage Space',
                'slug' => 'storage-space',
                'description' => 'SSD storage space for your files',
                'icon' => 'fas-server',
                'type' => 'numeric',
                'unit' => 'GB',
                'is_addon' => false,
                'is_active' => true,
                'sort_order' => 4,
                'group_id' => $groupIds['server'],
            ],
            [
                'name' => 'Bandwidth',
                'slug' => 'bandwidth',
                'description' => 'Monthly data transfer allowance',
                'icon' => 'fas-globe',
                'type' => 'numeric',
                'unit' => 'GB',
                'is_addon' => false,
                'is_active' => true,
                'sort_order' => 5,
                'group_id' => $groupIds['server'],
            ],
            [
                'name' => 'Domains',
                'slug' => 'domains',
                'description' => 'Number of domains you can host',
                'icon' => 'fas-globe-americas',
                'type' => 'numeric',
                'unit' => 'domains',
                'is_addon' => false,
                'is_active' => true,
                'sort_order' => 6,
                'group_id' => $groupIds['server'],
            ],
            [
                'name' => 'Email Accounts',
                'slug' => 'email-accounts',
                'description' => 'Number of email accounts included',
                'icon' => 'fas-envelope',
                'type' => 'numeric',
                'unit' => 'accounts',
                'is_addon' => false,
                'is_active' => true,
                'sort_order' => 7,
                'group_id' => $groupIds['server'],
            ],
        ];

        // Create addon features (optional upgrades)
        $addonFeatures = [
            [
                'name' => 'Priority Support',
                'slug' => 'priority-support',
                'description' => 'Faster response times for support tickets',
                'icon' => 'fas-clock',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 9.99,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 8,
                'group_id' => $groupIds['server'],
            ],
            [
                'name' => 'CDN Service',
                'slug' => 'cdn-service',
                'description' => 'Content Delivery Network for faster loading',
                'icon' => 'fas-cloud-upload-alt',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 4.99,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 9,
                'group_id' => $groupIds['performance'],
            ],
            [
                'name' => 'Extra Storage',
                'slug' => 'extra-storage',
                'description' => 'Additional storage space',
                'icon' => 'fas-server',
                'type' => 'select',
                'options' => [
                    ['value' => '50', 'label' => '50 GB', 'price' => 2.99],
                    ['value' => '100', 'label' => '100 GB', 'price' => 4.99],
                    ['value' => '250', 'label' => '250 GB', 'price' => 9.99],
                ],
                'unit' => 'GB',
                'is_addon' => true,
                'addon_price' => 2.99,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 10,
                'group_id' => $groupIds['server'],
            ],
            [
                'name' => 'Dedicated IP',
                'slug' => 'dedicated-ip',
                'description' => 'Dedicated IP address for your website',
                'icon' => 'fas-desktop',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 3.99,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 11,
                'group_id' => $groupIds['server'],
            ],
        ];


        // Create all features
        $allFeatures = array_merge($coreFeatures, $addonFeatures);

        foreach ($allFeatures as $featureData) {
            PlanFeature::updateOrCreate(
                ['slug' => $featureData['slug']],
                $featureData
            );
        }

        // Attach features to existing plans
        $this->attachFeaturesToPlans();
    }

    private function attachFeaturesToPlans()
    {
        $plans = Plan::all();

        foreach ($plans as $plan) {
            // Attach core features with appropriate values based on plan
            $this->attachCoreFeatures($plan);

            // Attach addon features as available
            $this->attachAddonFeatures($plan);
        }
    }

    private function attachCoreFeatures(Plan $plan)
    {
        $coreFeatures = PlanFeature::core()->active()->get();

        foreach ($coreFeatures as $feature) {
            $value = $this->getFeatureValueForPlan($plan, $feature);

            $plan->features()->attach($feature->id, [
                'value' => $value,
                'is_included' => true,
                'is_available' => false, // Core features are not available as addons
                'sort_order' => $feature->sort_order,
            ]);
        }
    }

    private function attachAddonFeatures(Plan $plan)
    {
        $addonFeatures = PlanFeature::addons()->active()->get();

        foreach ($addonFeatures as $feature) {
            $plan->features()->attach($feature->id, [
                'value' => null,
                'is_included' => false,
                'is_available' => true,
                'addon_price' => $feature->addon_price,
                'sort_order' => $feature->sort_order,
            ]);
        }
    }

    private function getFeatureValueForPlan(Plan $plan, PlanFeature $feature): ?string
    {
        // Map plan attributes to feature values
        $planFeatureMap = [
            'storage-space' => $plan->storage_gb,
            'bandwidth' => $plan->bandwidth_gb,
            'domains' => $plan->domains,
            'email-accounts' => $plan->email_accounts,
            'ssl-certificate' => $plan->ssl_certificate ? '1' : '0',
            'daily-backups' => $plan->backup ? '1' : '0',
            '24-7-support' => $plan->support_24_7 ? '1' : '0',
        ];

        return $planFeatureMap[$feature->slug] ?? null;
    }

    private function getFeatureGroupIds(): array
    {
        $groups = PlanFeatureGroup::all();
        $groupIds = [];

        foreach ($groups as $group) {
            $groupIds[$group->slug] = $group->id;
        }

        return $groupIds;
    }
}
