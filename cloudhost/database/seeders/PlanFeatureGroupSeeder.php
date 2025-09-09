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
                'slug' => 'server',
                'description' => 'Спецификации на сървъра и хардуерни характеристики',
                'icon' => 'fas-server',
                'icon_color' => 'blue',
                'sort_order' => 1,
            ],
            [
                'name' => 'Производителност',
                'slug' => 'performance',
                'description' => 'Оптимизация на производителността и скоростни функции',
                'icon' => 'fas-tachometer-alt',
                'icon_color' => 'green',
                'sort_order' => 2,
            ],
            [
                'name' => 'Сигурност',
                'slug' => 'security',
                'description' => 'Функции за сигурност и архивиране',
                'icon' => 'fas-shield-alt',
                'icon_color' => 'red',
                'sort_order' => 3,
            ],
            [
                'name' => 'Разработка',
                'slug' => 'development',
                'description' => 'Инструменти за разработка и среди',
                'icon' => 'fas-code',
                'icon_color' => 'purple',
                'sort_order' => 4,
            ],
            [
                'name' => 'Бази данни',
                'slug' => 'databases',
                'description' => 'Функции за бази данни и инструменти за управление',
                'icon' => 'fas-database',
                'icon_color' => 'indigo',
                'sort_order' => 5,
            ],
            [
                'name' => 'Имейл',
                'slug' => 'email',
                'description' => 'Имейл хостинг и функции за управление',
                'icon' => 'fas-envelope',
                'icon_color' => 'teal',
                'sort_order' => 6,
            ],
            [
                'name' => 'WordPress Поддръжка',
                'slug' => 'wordpress-support',
                'description' => 'Услуги за поддръжка на WordPress и WooCommerce',
                'icon' => 'fab-wordpress',
                'icon_color' => 'orange',
                'sort_order' => 7,
            ],
        ];

        foreach ($planFeatureGroups as $planFeatureGroupData) {
            PlanFeatureGroup::updateOrCreate(
                ['name' => $planFeatureGroupData['name']],
                $planFeatureGroupData
            );
        }
    }
}
