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
                'icon' => 'shield-check',
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
                'icon' => 'cloud-arrow-down',
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
                'icon' => 'chat-bubble-left-right',
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
                'icon' => 'server',
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
                'icon' => 'globe-alt',
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
                'icon' => 'globe-americas',
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
                'icon' => 'envelope',
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
                'icon' => 'clock',
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
                'icon' => 'cloud-arrow-up',
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
                'icon' => 'server-stack',
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
                'icon' => 'computer-desktop',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 3.99,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 11,
                'group_id' => $groupIds['server'],
            ],
        ];

        // Create WordPress support service features (using original Bulgarian from config.php)
        $wordpressSupportFeatures = [
            [
                'name' => 'Невъзможност за достъп до админ панел',
                'slug' => 'admin-access',
                'description' => 'Възстановяваме достъпа до административния панел на WordPress или WooCommerce магазина. Включва смяна на парола, email адрес или създаване на нов административен потребител.',
                'icon' => 'fa-user-shield',
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
                'icon' => 'fa-exclamation-triangle',
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
                'icon' => 'fa-code',
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
                'icon' => 'fa-globe',
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
                'icon' => 'fa-database',
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
                'icon' => 'fa-shield-alt',
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
                'icon' => 'fa-sync-alt',
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
                'icon' => 'fa-shopping-cart',
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
                'icon' => 'fa-rocket',
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
                'icon' => 'fa-chart-line',
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
                'icon' => 'fa-eye',
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
                'icon' => 'fa-bug',
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
                'icon' => 'fa-question-circle',
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
                'icon' => 'fa-code-branch',
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
                'icon' => 'fa-tachometer-alt',
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
                'icon' => 'fa-ellipsis-h',
                'type' => 'boolean',
                'is_addon' => true,
                'addon_price' => 50.00,
                'addon_currency' => 'USD',
                'is_active' => true,
                'sort_order' => 27,
                'group_id' => $groupIds['wordpress-support'],
            ],
        ];

        // Create all features
        $allFeatures = array_merge($coreFeatures, $addonFeatures, $wordpressSupportFeatures);
        
        foreach ($allFeatures as $featureData) {
            PlanFeature::create($featureData);
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
