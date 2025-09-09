<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;
use App\Models\PlanGroup;
use App\Models\PlanFeature;

class WordPressPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get the WordPress поддръжка plan group
        $wordpressSupportGroup = PlanGroup::where('slug', 'wordpress-support')->first();
        
        if (!$wordpressSupportGroup) {
            $this->command->error('WordPress поддръжка plan group not found. Please run PlanGroupSeeder first.');
            return;
        }

        // WordPress Support Plans data from config.php
        $wordpressPlans = [
            [
                'name' => 'WordPress Основен',
                'slug' => 'wordpress-basic',
                'description' => 'За малки сайтове и блогове с основни нужди',
                'monthly_price' => 29.99,
                'yearly_price' => 299.99,
                'currency' => 'лв.',
                'storage_gb' => null, // Not applicable for support plans
                'bandwidth_gb' => null, // Not applicable for support plans
                'domains' => 1,
                'subdomains' => null,
                'databases' => null,
                'email_accounts' => null,
                'ftp_accounts' => null,
                'ssl_certificate' => true,
                'backup' => true,
                'support_24_7' => false,
                'is_featured' => false,
                'is_active' => true,
                'group_id' => $wordpressSupportGroup->id,
                'sort_order' => 4,
            ],
            [
                'name' => 'WordPress Професионален',
                'slug' => 'wordpress-professional',
                'description' => 'За бизнес сайтове и WooCommerce магазини',
                'monthly_price' => 59.99,
                'yearly_price' => 599.99,
                'currency' => 'лв.',
                'storage_gb' => null, // Not applicable for support plans
                'bandwidth_gb' => null, // Not applicable for support plans
                'domains' => 3,
                'subdomains' => null,
                'databases' => null,
                'email_accounts' => null,
                'ftp_accounts' => null,
                'ssl_certificate' => true,
                'backup' => true,
                'support_24_7' => false,
                'is_featured' => true,
                'is_active' => true,
                'group_id' => $wordpressSupportGroup->id,
                'sort_order' => 5,
            ],
            [
                'name' => 'WordPress Корпоративен',
                'slug' => 'wordpress-enterprise',
                'description' => 'За големи корпорации и високонатоварени сайтове',
                'monthly_price' => 119.99,
                'yearly_price' => 1199.99,
                'currency' => 'лв.',
                'storage_gb' => null, // Not applicable for support plans
                'bandwidth_gb' => null, // Not applicable for support plans
                'domains' => null, // Unlimited
                'subdomains' => null,
                'databases' => null,
                'email_accounts' => null,
                'ftp_accounts' => null,
                'ssl_certificate' => true,
                'backup' => true,
                'support_24_7' => true,
                'is_featured' => false,
                'is_active' => true,
                'group_id' => $wordpressSupportGroup->id,
                'sort_order' => 6,
            ],
        ];

        foreach ($wordpressPlans as $planData) {
            $plan = Plan::updateOrCreate(
                ['slug' => $planData['slug']],
                $planData
            );
        }

        // Attach WordPress features to the plans
        $this->attachWordPressFeaturesToPlans();
    }

    private function attachWordPressFeaturesToPlans()
    {
        // Only attach WordPress features to WordPress plans
        $wordpressPlans = Plan::whereHas('group', function($query) {
            $query->where('slug', 'wordpress-support');
        })->get();

        foreach ($wordpressPlans as $plan) {
            $this->attachWordPressAddonFeatures($plan);
        }
    }

    private function attachWordPressAddonFeatures(Plan $plan)
    {
        $wordpressFeatures = PlanFeature::where('group_id', function($query) {
            $query->select('id')
                  ->from('plan_feature_groups')
                  ->where('slug', 'wordpress-support');
        })->active()->get();

        foreach ($wordpressFeatures as $feature) {
            // Determine if this is an addon feature or a plan-level feature
            $isAddon = $feature->is_addon;
            
            // Get the appropriate value for plan-level features
            $value = $this->getWordPressFeatureValueForPlan($plan, $feature);
            
            $plan->features()->attach($feature->id, [
                'value' => $value,
                'is_included' => !$isAddon, // Plan-level features are included, addons are not
                'is_available' => $isAddon, // Only addon features are available as upgrades
                'addon_price' => $isAddon ? $feature->addon_price : null,
                'sort_order' => $feature->sort_order,
            ]);
        }
    }

    private function getWordPressFeatureValueForPlan(Plan $plan, PlanFeature $feature): ?string
    {
        // Map plan attributes to feature values based on plan slug
        $planFeatureMap = [
            'wordpress-basic' => [
                'working-hours' => '9:00 - 18:00 (Пн-Пт)',
                'response-time' => '24 часа',
                'included-sites' => '1 сайт',
                'backup-frequency' => 'Седмично',
                'security-monitoring' => 'Основно',
                'performance-optimization' => 'Основно',
                'priority' => 'Стандартно'
            ],
            'wordpress-professional' => [
                'working-hours' => '8:00 - 20:00 (Пн-Пт), 10:00 - 16:00 (Сб)',
                'response-time' => '4 часа',
                'included-sites' => '3 сайта',
                'backup-frequency' => 'Ежедневно',
                'security-monitoring' => 'Разширено',
                'performance-optimization' => 'Разширено',
                'priority' => 'Високо'
            ],
            'wordpress-enterprise' => [
                'working-hours' => '24/7',
                'response-time' => '30 минути',
                'included-sites' => 'Неограничени',
                'backup-frequency' => 'В реално време',
                'security-monitoring' => 'Enterprise',
                'performance-optimization' => 'Максимално',
                'priority' => 'VIP'
            ]
        ];

        return $planFeatureMap[$plan->slug][$feature->slug] ?? null;
    }
}
