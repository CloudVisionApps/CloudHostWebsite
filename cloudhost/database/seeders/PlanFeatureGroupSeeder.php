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
                'name' => 'Сървър',
                'icon' => 'server',
                'icon_color' => 'blue',
            ],
            [
                'name' => 'Производителност',
                'icon' => 'tachometer-alt',
                'icon_color' => 'green',
            ],
            [
                'name' => 'Сигурност',
                'icon' => 'shield-alt',
                'icon_color' => 'red',
            ],
            [
                'name' => 'Разработка',
                'icon' => 'code',
                'icon_color' => 'purple',
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
