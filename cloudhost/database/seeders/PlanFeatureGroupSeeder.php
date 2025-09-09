<?php

namespace Database\Seeders;

use App\Models\PlanFeatureGroup;
use App\Models\PlanGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanFeatureGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $planFeatureGroups = [
            [
                'name' => 'Core Features',
                'slug' => 'core-features',
                'description' => 'Essential hosting features included in all plans',
                'icon' => 'server',
                'icon_color' => 'blue',
                'sort_order' => 1,
            ],
            [
                'name' => 'Performance',
                'slug' => 'performance',
                'description' => 'Performance optimization and speed features',
                'icon' => 'tachometer-alt',
                'icon_color' => 'green',
                'sort_order' => 2,
            ],
            [
                'name' => 'Security',
                'slug' => 'security',
                'description' => 'Security and backup features',
                'icon' => 'shield-alt',
                'icon_color' => 'red',
                'sort_order' => 3,
            ],
            [
                'name' => 'Development',
                'slug' => 'development',
                'description' => 'Development tools and environments',
                'icon' => 'code',
                'icon_color' => 'purple',
                'sort_order' => 4,
            ],
            [
                'name' => 'WordPress Support',
                'slug' => 'wordpress-support',
                'description' => 'WordPress and WooCommerce support services',
                'icon' => 'wordpress',
                'icon_color' => 'orange',
                'sort_order' => 5,
            ],
        ];

        foreach ($planFeatureGroups as $planFeatureGroupData) {
            PlanFeatureGroup::firstOrCreate(
                ['name' => $planFeatureGroupData['name']],
                $planFeatureGroupData
            );
        }
    }
}
