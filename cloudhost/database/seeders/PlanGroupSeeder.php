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
                'description' => 'Достоверни и достъпни планове за споделен хостинг за лични и малки бизнес уебсайтове.',
                'sort_order' => 1,
            ],
            [
                'name' => 'VPS хостинг',
                'description' => 'Мощни и мащабируеми VPS хостинг решения за развиващи се уебсайтове и приложения.',
                'sort_order' => 2,
            ],
            [
                'name' => 'Специализирани сървъри',
                'description' => 'Високопроизводителни специализирани сървъри за ресурсоемки приложения и големи уебсайтове.',
                'sort_order' => 3,
            ],
            [
                'name' => 'Облачен хостинг',
                'description' => 'Гъвкави и мащабируеми облачни хостинг решения за бизнеси от всички размери.',
                'sort_order' => 4,
            ],
            [
                'name' => 'WordPress хостинг',
                'description' => 'Оптимизирани WordPress хостинг планове за блогъри и бизнеси, които искат да подобрят онлайн присъствието си.',
                'sort_order' => 5,
            ],
            [
                'name' => 'WordPress поддръжка',
                'description' => 'Управлявани WordPress планове за поддръжка за блогъри и бизнеси, които искат да подобрят онлайн присъствието си.',
                'sort_order' => 6,
            ],
        ];

        foreach ($planGroups as $planGroupData) {
            PlanGroup::firstOrCreate(
                ['name' => $planGroupData['name']],
                $planGroupData
            );
        }
    }
}
