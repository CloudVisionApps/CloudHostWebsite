<?php

namespace Database\Seeders;

use App\Models\PlanGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $planGroups = [
            [
                'name' => 'Споделен хостинг',
                'slug' => 'shared-hosting',
                'description' => 'Достоверни и достъпни планове за споделен хостинг за лични и малки бизнес уебсайтове.',
                'icon' => 'fas-share-alt',
                'icon_color' => 'blue',
                'sort_order' => 1,
            ],
            [
                'name' => 'VPS хостинг',
                'slug' => 'vps-hosting',
                'description' => 'Мощни и мащабируеми VPS хостинг решения за развиващи се уебсайтове и приложения.',
                'icon' => 'fas-server',
                'icon_color' => 'green',
                'sort_order' => 2,
            ],
            [
                'name' => 'Специализирани сървъри',
                'slug' => 'dedicated-servers',
                'description' => 'Високопроизводителни специализирани сървъри за ресурсоемки приложения и големи уебсайтове.',
                'icon' => 'fas-microchip',
                'icon_color' => 'red',
                'sort_order' => 3,
            ],
            [
                'name' => 'Облачен хостинг',
                'slug' => 'cloud-hosting',
                'description' => 'Гъвкави и мащабируеми облачни хостинг решения за бизнеси от всички размери.',
                'icon' => 'fas-cloud',
                'icon_color' => 'purple',
                'sort_order' => 4,
            ],
            [
                'name' => 'WordPress хостинг',
                'slug' => 'wordpress-hosting',
                'description' => 'Оптимизирани WordPress хостинг планове за блогъри и бизнеси, които искат да подобрят онлайн присъствието си.',
                'icon' => 'fab-wordpress',
                'icon_color' => 'indigo',
                'sort_order' => 5,
            ],
            [
                'name' => 'WordPress поддръжка',
                'slug' => 'wordpress-support',
                'description' => 'Управлявани WordPress планове за поддръжка за блогъри и бизнеси, които искат да подобрят онлайн присъствието си.',
                'icon' => 'fas-headset',
                'icon_color' => 'orange',
                'sort_order' => 6,
            ],
        ];

        foreach ($planGroups as $planGroupData) {
            PlanGroup::updateOrCreate(
                ['name' => $planGroupData['name']],
                $planGroupData
            );
        }
    }
}
