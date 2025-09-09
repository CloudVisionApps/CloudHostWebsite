<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PlanFeature;
use App\Models\Plan;
use App\Models\PlanFeatureGroup;

class WordPressPlanFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get feature group IDs
        $groupIds = $this->getFeatureGroupIds();

        // Create WordPress support service features (using original Bulgarian from config.php)
        $wordpressSupportFeatures = [
            [
                'name' => 'Невъзможност за достъп до админ панел',
                'slug' => 'admin-access',
                'description' => 'Възстановяваме достъпа до административния панел на WordPress или WooCommerce магазина. Включва смяна на парола, email адрес или създаване на нов административен потребител.',
                'icon' => 'fas-user-shield',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 15.00,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 12,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Невъзможност за зареждане на страница',
                'slug' => 'page-loading',
                'description' => 'Решаваме проблеми с зареждането на страници - бял екран, Error 500, Error 501 или други критични грешки. Диагностицираме причината и прилагаме подходящото решение.',
                'icon' => 'fas-exclamation-triangle',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 25.00,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 13,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Настройки на PHP',
                'slug' => 'php-settings',
                'description' => 'Конфигурираме PHP параметри за оптимална производителност - лимити за качване на файлове, памет, време за изпълнение и други настройки.',
                'icon' => 'fas-code',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 20.00,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 14,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Смяна на основен домейн',
                'slug' => 'domain-change',
                'description' => 'Извършваме професионална смяна на основния домейн на WordPress сайт или WooCommerce магазин. Включва настройка на DNS записи, SSL сертификати и пренасочване на трафика.',
                'icon' => 'fas-globe',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 30.00,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 15,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Настройка за връзка с база от данни',
                'slug' => 'database-connection',
                'description' => 'Помагаме с конфигурирането на връзката с MySQL базата данни. Включва настройка на потребител, парола, име на базата данни и други параметри в wp-config.php файла.',
                'icon' => 'fas-database',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 18.00,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 16,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Настройки за сигурност',
                'slug' => 'security-settings',
                'description' => 'Прилагаме допълнителни мерки за сигурност за защита на WordPress сайтове и WooCommerce магазини. Включва защита срещу brute force атаки и други сигурностни настройки.',
                'icon' => 'fas-shield-alt',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 22.00,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 17,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Обновяване на плъгини, теми и WordPress ядро',
                'slug' => 'updates',
                'description' => 'Извършваме месечни обновления на WordPress ядрото, плъгини и теми. Преди всяка актуализация създаваме резервно копие за безопасност.',
                'icon' => 'fas-sync-alt',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 12.00,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 18,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Настройки на WooCommerce',
                'slug' => 'woocommerce-settings',
                'description' => 'Предоставяме експертна помощ за настройка на основния WooCommerce плъгин. Помагаме с конфигурирането на магазина, продукти, плащания и доставки.',
                'icon' => 'fas-shopping-cart',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 35.00,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 19,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Конфигуриране на cache плъгин',
                'slug' => 'cache-plugin',
                'description' => 'Настройваме и оптимизираме кеширащи плъгини за максимална производителност. Включва конфигуриране на LiteSpeed Cache или други подходящи решения.',
                'icon' => 'fas-rocket',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 20.00,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 20,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Оптимизация на сайт',
                'slug' => 'site-optimization',
                'description' => 'Извършваме комплексна оптимизация на WordPress сайтове и WooCommerce магазини. Включва анализ на производителността и препоръки за подобрения.',
                'icon' => 'fas-chart-line',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 40.00,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 21,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Мониторинг на сайт',
                'slug' => 'site-monitoring',
                'description' => 'Следим за коректното функциониране на началната страница на сайта. При възникване на проблеми ви уведомяваме незабавно за бързо отстраняване.',
                'icon' => 'fas-eye',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 15.00,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 22,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Съдействие при Error 500',
                'slug' => 'error-500',
                'description' => 'Диагностицираме и решаваме критични грешки като Error 500. Локализираме причината за проблема и прилагаме подходящото решение.',
                'icon' => 'fas-bug',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 25.00,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 23,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Помощ при работа с админ панела',
                'slug' => 'admin-help',
                'description' => 'Предоставяме експертна помощ за навигация и използване на WordPress административния панел. Помагаме с намирането на функции и настройки.',
                'icon' => 'fas-question-circle',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 18.00,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 24,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Създаване на Dev среда',
                'slug' => 'dev-environment',
                'description' => 'Създаваме тестова среда за безопасно тестване на нови функционалности, плъгини и теми. Включва отделна база данни и файлова система.',
                'icon' => 'fas-code-branch',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 30.00,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 25,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Одит при бавен сайт',
                'slug' => 'performance-audit',
                'description' => 'Извършваме детайлен анализ на производителността на бавно зареждащи се сайтове. Предоставяме препоръки за оптимизация и прилагаме решения.',
                'icon' => 'fas-tachometer-alt',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 35.00,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 26,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Друго?',
                'slug' => 'other',
                'description' => 'За всички други WordPress и WooCommerce свързани услуги, които не са описани по-горе, моля свържете се с нас за персонализирана консултация.',
                'icon' => 'fas-ellipsis-h',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 50.00,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 27,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Работно време',
                'slug' => 'working-hours',
                'description' => 'График на работа на техническата поддръжка - 9:00-18:00 (Пн-Пт), 8:00-20:00 (Пн-Пт) + 10:00-16:00 (Сб), или 24/7',
                'icon' => 'fas-clock',
                'type' => 'text',
                'is_addon' => false,
                'is_active' => true,
                'sort_order' => 28,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Време за отговор',
                'slug' => 'response-time',
                'description' => 'Гарантирано време за отговор на техническата поддръжка - 24 часа, 4 часа или 30 минути',
                'icon' => 'fas-stopwatch',
                'type' => 'text',
                'is_addon' => false,
                'is_active' => true,
                'sort_order' => 29,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Включени сайтове',
                'slug' => 'included-sites',
                'description' => 'Брой включени сайтове в плана - 1 сайт, 3 сайта или неограничени',
                'icon' => 'fas-globe',
                'type' => 'text',
                'is_addon' => false,
                'is_active' => true,
                'sort_order' => 30,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Честота на резервни копия',
                'slug' => 'backup-frequency',
                'description' => 'Честота на създаване на резервни копия - седмично, ежедневно или в реално време',
                'icon' => 'fas-cloud-arrow-down',
                'type' => 'text',
                'is_addon' => false,
                'is_active' => true,
                'sort_order' => 31,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Мониторинг на сигурността',
                'slug' => 'security-monitoring',
                'description' => 'Ниво на мониторинг на сигурността - основно, разширено или enterprise',
                'icon' => 'fas-shield-virus',
                'type' => 'text',
                'is_addon' => false,
                'is_active' => true,
                'sort_order' => 32,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Оптимизация на производителността',
                'slug' => 'performance-optimization',
                'description' => 'Ниво на оптимизация на производителността - основно, разширено или максимално',
                'icon' => 'fas-tachometer-alt',
                'type' => 'text',
                'is_addon' => false,
                'is_active' => true,
                'sort_order' => 33,
                'group_id' => $groupIds['wordpress-support'],
            ],
            [
                'name' => 'Приоритет',
                'slug' => 'priority',
                'description' => 'Приоритет на техническата поддръжка - стандартно, високо или VIP',
                'icon' => 'fas-star',
                'type' => 'text',
                'is_addon' => false,
                'is_active' => true,
                'sort_order' => 34,
                'group_id' => $groupIds['wordpress-support'],
            ],
        ];

        // Create WordPress support features
        foreach ($wordpressSupportFeatures as $featureData) {
            PlanFeature::updateOrCreate(
                ['slug' => $featureData['slug']],
                $featureData
            );
        }

        // Attach WordPress features to existing plans
        $this->attachWordPressFeaturesToPlans();
    }

    private function attachWordPressFeaturesToPlans()
    {
        $plans = Plan::all();

        foreach ($plans as $plan) {
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
