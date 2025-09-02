<?php
// Configuration file for CloudHost Pro website
// Modify these values to customize your website

// Company Information
$config = [
    'company' => [
        'name' => 'CloudHost.bg',
        'tagline' => 'Премиум Cloud Решения',
        'phone' => '+359 (888) 123-456',
        'email' => 'support@cloudhost.bg',
        'address' => 'ул. Cloud 123, Техноград, БГ 1000',
        'website' => 'https://cloudhost.bg'
    ],
    
    // Domain TLD Pricing
    'tlds' => [
        '.com' => [
            'label' => '.com',
            'monthly_price' => '2.99',
            'yearly_price' => '11.99',
            'renew_yearly_price' => '13.99',
            'transfer_yearly_price' => '11.49',
            'currency' => 'лв.',
            'privacy' => true,
            'promo' => 'Popular'
        ],
        '.net' => [
            'label' => '.net',
            'monthly_price' => '2.79',
            'yearly_price' => '10.99',
            'renew_yearly_price' => '12.99',
            'transfer_yearly_price' => '10.49',
            'currency' => 'лв.',
            'privacy' => true,
            'promo' => null
        ],
        '.org' => [
            'label' => '.org',
            'monthly_price' => '2.49',
            'yearly_price' => '9.99',
            'renew_yearly_price' => '11.99',
            'transfer_yearly_price' => '9.49',
            'currency' => 'лв.',
            'privacy' => true,
            'promo' => null
        ],
        '.bg' => [
            'label' => '.bg',
            'monthly_price' => '5.49',
            'yearly_price' => '19.99',
            'renew_yearly_price' => '22.99',
            'transfer_yearly_price' => '19.49',
            'currency' => 'лв.',
            'privacy' => false,
            'promo' => 'Local favorite'
        ],
        '.eu' => [
            'label' => '.eu',
            'monthly_price' => '2.19',
            'yearly_price' => '8.49',
            'renew_yearly_price' => '9.99',
            'transfer_yearly_price' => '7.99',
            'currency' => 'лв.',
            'privacy' => true,
            'promo' => null
        ],
        '.io' => [
            'label' => '.io',
            'monthly_price' => '6.99',
            'yearly_price' => '29.99',
            'renew_yearly_price' => '34.99',
            'transfer_yearly_price' => '28.99',
            'currency' => 'лв.',
            'privacy' => true,
            'promo' => 'Startup'
        ],
        '.dev' => [
            'label' => '.dev',
            'monthly_price' => '3.49',
            'yearly_price' => '13.99',
            'renew_yearly_price' => '15.99',
            'transfer_yearly_price' => '12.99',
            'currency' => 'лв.',
            'privacy' => true,
            'promo' => null
        ],
        '.shop' => [
            'label' => '.shop',
            'monthly_price' => '3.99',
            'yearly_price' => '15.99',
            'renew_yearly_price' => '18.99',
            'transfer_yearly_price' => '14.99',
            'currency' => 'лв.',
            'privacy' => true,
            'promo' => 'E‑commerce'
        ],
        '.info' => [
            'label' => '.info',
            'monthly_price' => '1.99',
            'yearly_price' => '7.99',
            'renew_yearly_price' => '9.49',
            'transfer_yearly_price' => '7.49',
            'currency' => 'лв.',
            'privacy' => true,
            'promo' => null
        ],
        '.me' => [
            'label' => '.me',
            'monthly_price' => '2.29',
            'yearly_price' => '8.99',
            'renew_yearly_price' => '10.49',
            'transfer_yearly_price' => '8.49',
            'currency' => 'лв.',
            'privacy' => true,
            'promo' => null
        ],
        '.xyz' => [
            'label' => '.xyz',
            'monthly_price' => '0.99',
            'yearly_price' => '3.99',
            'renew_yearly_price' => '7.99',
            'transfer_yearly_price' => '3.49',
            'currency' => 'лв.',
            'privacy' => true,
            'promo' => 'Promo'
        ],
        '.tech' => [
            'label' => '.tech',
            'monthly_price' => '4.49',
            'yearly_price' => '17.99',
            'renew_yearly_price' => '19.99',
            'transfer_yearly_price' => '16.99',
            'currency' => 'лв.',
            'privacy' => true,
            'promo' => null
        ]
    ],
    
    // Social Media Links
    'social' => [
        'facebook' => '#',
        'twitter' => '#',
        'linkedin' => '#',
        'instagram' => '#',
        'youtube' => '#'
    ],
    
    // Contact Information
    'contact' => [
        'support_hours' => '24/7 Поддръжка',
        'response_time' => 'Под 2 часа',
        'emergency_phone' => '+359 (888) 999-888'
    ],
    
    // Features
    'features' => [
        'uptime' => '99.9%',
        'customers' => '50K+',
        'experience' => '15+',
        'support' => '24/7'
    ],
    
    // Pricing Plans
    'plans' => [
        'starter' => [
            'name' => 'Стартер',
            'description' => 'Идеален за малки сайтове, блогове и лични проекти',
            'monthly_price' => '19.99',
            'yearly_price' => '167.92',
            'yearly_monthly_price' => '13.99',
            'currency' => 'лв.',
            'monthly_period' => '/месец',
            'yearly_period' => '/годишно',
            'yearly_discount' => '30%',
            'features' => [
                '10 GB SSD Хранилище',
                'Неограничен Трафик',
                '5 Бази Данни',
                'Безплатен SSL Сертификат',
                '24/7 Поддръжка'
            ],
            'color' => 'blue',
            'detailed_specs' => [
                'server' => [
                    'cpu_cores' => '1 vCPU Core',
                    'ram' => '1 GB RAM',
                    'storage_type' => 'SSD NVMe',
                    'storage_speed' => 'Up to 3,500 MB/s',
                    'bandwidth' => 'Unlimited',
                    'transfer_speed' => '1 Gbps'
                ],
                'performance' => [
                    'uptime_guarantee' => '99.9%',
                    'load_time' => '< 2 seconds',
                    'concurrent_users' => 'Up to 100',
                    'daily_visitors' => 'Up to 1,000',
                    'cache_system' => 'LiteSpeed Cache',
                    'cdn_included' => false
                ],
                'security' => [
                    'ssl_certificate' => 'Let\'s Encrypt Free',
                    'ddos_protection' => 'Basic (10 Gbps)',
                    'firewall' => 'Basic Web Application Firewall',
                    'malware_scanning' => 'Weekly',
                    'backup_frequency' => 'Daily',
                    'backup_retention' => '7 days',
                    'ip_whitelisting' => false
                ],
                'development' => [
                    'php_versions' => '7.4, 8.0, 8.1, 8.2',
                    // 'node_js' => 'v16, v18',
                    // 'python' => '3.8, 3.9, 3.10',
                    'git_deployment' => true,
                    'ssh_access' => false,
                    'cron_jobs' => '5 jobs',
                    'composer' => true
                ],
                'databases' => [
                    'mysql_version' => '8.0',
                    'max_connections' => '50',
                    'max_size' => '1 GB',
                    'phpmyadmin' => true,
                    'backup_frequency' => 'Daily'
                ],
                'email' => [
                    'email_accounts' => '5 accounts',
                    'email_storage' => '1 GB per account',
                    'spam_protection' => 'Basic',
                    'webmail' => true,
                    'smtp' => true
                ]
            ]
        ],
        'professional' => [
            'name' => 'Професионален',
            'description' => 'За растещи бизнеси, e-commerce сайтове и корпоративни приложения',
            'monthly_price' => '39.99',
            'yearly_price' => '335.92',
            'yearly_monthly_price' => '27.99',
            'currency' => 'лв.',
            'monthly_period' => '/месец',
            'yearly_period' => '/годишно',
            'yearly_discount' => '30%',
            'popular' => true,
            'features' => [
                '50 GB SSD Хранилище',
                'Неограничен Трафик',
                '25 Бази Данни',
                'Безплатен SSL Сертификат',
                'CDN Включен',
                'Приоритетна Поддръжка'
            ],
            'color' => 'purple',
            'detailed_specs' => [
                'server' => [
                    'cpu_cores' => '2 vCPU Cores',
                    'ram' => '4 GB RAM',
                    'storage_type' => 'SSD NVMe',
                    'storage_speed' => 'Up to 7,000 MB/s',
                    'bandwidth' => 'Unlimited',
                    'transfer_speed' => '2.5 Gbps'
                ],
                'performance' => [
                    'uptime_guarantee' => '99.95%',
                    'load_time' => '< 1.5 seconds',
                    'concurrent_users' => 'Up to 500',
                    'daily_visitors' => 'Up to 10,000',
                    'cache_system' => 'LiteSpeed Cache + Redis',
                    'cdn_included' => true
                ],
                'security' => [
                    'ssl_certificate' => 'Let\'s Encrypt Free + Wildcard',
                    'ddos_protection' => 'Advanced (50 Gbps)',
                    'firewall' => 'Advanced Web Application Firewall',
                    'malware_scanning' => 'Daily',
                    'backup_frequency' => 'Every 6 hours',
                    'backup_retention' => '30 days',
                    'ip_whitelisting' => true
                ],
                'development' => [
                    'php_versions' => '7.4, 8.0, 8.1, 8.2, 8.3',
                    // 'node_js' => 'v16, v18, v20',
                    // 'python' => '3.8, 3.9, 3.10, 3.11, 3.12',
                    'git_deployment' => true,
                    'ssh_access' => true,
                    'cron_jobs' => 'Unlimited',
                    'composer' => true
                ],
                'databases' => [
                    'mysql_version' => '8.0',
                    'max_connections' => '200',
                    'max_size' => '5 GB',
                    'phpmyadmin' => true,
                    'backup_frequency' => 'Every 6 hours'
                ],
                'email' => [
                    'email_accounts' => '25 accounts',
                    'email_storage' => '5 GB per account',
                    'spam_protection' => 'Advanced',
                    'webmail' => true,
                    'smtp' => true
                ]
            ]
        ],
        'enterprise' => [
            'name' => 'Корпоративен',
            'description' => 'За големи проекти, корпорации и високонатоварени приложения',
            'monthly_price' => '79.99',
            'yearly_price' => '671.92',
            'yearly_monthly_price' => '55.99',
            'currency' => 'лв.',
            'monthly_period' => '/месец',
            'yearly_period' => '/годишно',
            'yearly_discount' => '30%',
            'features' => [
                '200 GB SSD Хранилище',
                'Неограничен Трафик',
                'Неограничени Бази Данни',
                'Безплатен SSL Сертификат',
                'CDN + DDoS Защита',
                'VIP Поддръжка'
            ],
            'color' => 'green',
            'detailed_specs' => [
                'server' => [
                    'cpu_cores' => '4 vCPU Cores',
                    'ram' => '8 GB RAM',
                    'storage_type' => 'SSD NVMe',
                    'storage_speed' => 'Up to 7,000 MB/s',
                    'bandwidth' => 'Unlimited',
                    'transfer_speed' => '5 Gbps'
                ],
                'performance' => [
                    'uptime_guarantee' => '99.99%',
                    'load_time' => '< 1 second',
                    'concurrent_users' => 'Up to 2,000',
                    'daily_visitors' => 'Up to 100,000',
                    'cache_system' => 'LiteSpeed Cache + Redis + Varnish',
                    'cdn_included' => true
                ],
                'security' => [
                    'ssl_certificate' => 'Let\'s Encrypt Free + Wildcard + EV SSL',
                    'ddos_protection' => 'Enterprise (100 Gbps)',
                    'firewall' => 'Enterprise Web Application Firewall',
                    'malware_scanning' => 'Real-time',
                    'backup_frequency' => 'Every hour',
                    'backup_retention' => '90 days',
                    'ip_whitelisting' => true
                ],
                'development' => [
                    'php_versions' => '7.4, 8.0, 8.1, 8.2, 8.3',
                    // 'node_js' => 'v16, v18, v20, v21',
                    // 'python' => '3.8, 3.9, 3.10, 3.11, 3.12',
                    'git_deployment' => true,
                    'ssh_access' => true,
                    'cron_jobs' => 'Unlimited',
                    'composer' => true
                ],
                'databases' => [
                    'mysql_version' => '8.0',
                    'max_connections' => '500',
                    'max_size' => 'Unlimited',
                    'phpmyadmin' => true,
                    'backup_frequency' => 'Every hour'
                ],
                'email' => [
                    'email_accounts' => 'Unlimited',
                    'email_storage' => '10 GB per account',
                    'spam_protection' => 'Enterprise',
                    'webmail' => true,
                    'smtp' => true
                ]
            ]
        ]
    ],
    
    // SEO Settings
    'seo' => [
        'title' => 'CloudHost.bg - Премиум Cloud Хостинг Решения',
        'description' => 'Изживейте светкавична производителност, 99.9% гарантирана работа и корпоративна сигурност с нашите cloud хостинг решения.',
        'keywords' => 'cloud хостинг, уеб хостинг, VPS, сървъри, cloud решения',
        'author' => 'CloudHost.bg'
    ],
    
    // WordPress Support Plans
    'wordpress_support' => [
        'basic' => [
            'name' => 'Основен',
            'description' => 'За малки сайтове и блогове с основни нужди',
            'monthly_price' => '29.99',
            'yearly_price' => '299.99',
            'yearly_monthly_price' => '24.99',
            'currency' => 'лв.',
            'monthly_period' => '/месец',
            'yearly_period' => '/годишно',
            'yearly_discount' => '17%',
            'popular' => false,
            'color' => 'blue',
            'features' => [
                'cache_plugin',
                'database_connection',
                'php_settings',
                'admin_access',
                'page_loading',
                'domain_change',
                'admin_help',
                'error_500',
                'performance_audit',
                'woocommerce_settings'
            ],
            'support_hours' => '9:00 - 18:00 (Пн-Пт)',
            'response_time' => '24 часа',
            'sites_included' => '1 сайт',
            'backup_frequency' => 'Седмично',
            'security_monitoring' => 'Основно',
            'performance_optimization' => 'Основно',
            'priority' => 'Стандартно'
        ],
        'professional' => [
            'name' => 'Професионален',
            'description' => 'За бизнес сайтове и WooCommerce магазини',
            'monthly_price' => '59.99',
            'yearly_price' => '599.99',
            'yearly_monthly_price' => '49.99',
            'currency' => 'лв.',
            'monthly_period' => '/месец',
            'yearly_period' => '/годишно',
            'yearly_discount' => '17%',
            'popular' => true,
            'color' => 'purple',
            'features' => [
                'cache_plugin',
                'database_connection',
                'security_settings',
                'php_settings',
                'admin_access',
                'page_loading',
                'domain_change',
                'site_monitoring',
                'admin_help',
                'error_500',
                'dev_environment',
                'performance_audit',
                'woocommerce_settings'
            ],
            'support_hours' => '8:00 - 20:00 (Пн-Пт), 10:00 - 16:00 (Сб)',
            'response_time' => '4 часа',
            'sites_included' => '3 сайта',
            'backup_frequency' => 'Ежедневно',
            'security_monitoring' => 'Разширено',
            'performance_optimization' => 'Разширено',
            'priority' => 'Високо'
        ],
        'enterprise' => [
            'name' => 'Корпоративен',
            'description' => 'За големи корпорации и високонатоварени сайтове',
            'monthly_price' => '119.99',
            'yearly_price' => '1199.99',
            'yearly_monthly_price' => '99.99',
            'currency' => 'лв.',
            'monthly_period' => '/месец',
            'yearly_period' => '/годишно',
            'yearly_discount' => '17%',
            'popular' => false,
            'color' => 'green',
            'features' => [
                'cache_plugin',
                'database_connection',
                'security_settings',
                'php_settings',
                'admin_access',
                'page_loading',
                'updates',
                'domain_change',
                'site_monitoring',
                'admin_help',
                'error_500',
                'dev_environment',
                'performance_audit',
                'woocommerce_settings',
                'site_optimization'
            ],
            'support_hours' => '24/7',
            'response_time' => '30 минути',
            'sites_included' => 'Неограничени',
            'backup_frequency' => 'В реално време',
            'security_monitoring' => 'Enterprise',
            'performance_optimization' => 'Максимално',
            'priority' => 'VIP'
        ]
    ],

    // WordPress Support Service Details
    'wordpress_service_details' => [
        'admin_access' => [
            'title' => 'Невъзможност за достъп до админ панел',
            'description' => 'Възстановяваме достъпа до административния панел на WordPress или WooCommerce магазина. Включва смяна на парола, email адрес или създаване на нов административен потребител.',
            'icon' => 'fa-user-shield'
        ],
        'page_loading' => [
            'title' => 'Невъзможност за зареждане на страница',
            'description' => 'Решаваме проблеми с зареждането на страници - бял екран, Error 500, Error 501 или други критични грешки. Диагностицираме причината и прилагаме подходящото решение.',
            'icon' => 'fa-exclamation-triangle'
        ],
        'php_settings' => [
            'title' => 'Настройки на PHP',
            'description' => 'Конфигурираме PHP параметри за оптимална производителност - лимити за качване на файлове, памет, време за изпълнение и други настройки.',
            'icon' => 'fa-code'
        ],
        'domain_change' => [
            'title' => 'Смяна на основен домейн',
            'description' => 'Извършваме професионална смяна на основния домейн на WordPress сайт или WooCommerce магазин. Включва настройка на DNS записи, SSL сертификати и пренасочване на трафика.',
            'icon' => 'fa-globe'
        ],
        'database_connection' => [
            'title' => 'Настройка за връзка с база от данни',
            'description' => 'Помагаме с конфигурирането на връзката с MySQL базата данни. Включва настройка на потребител, парола, име на базата данни и други параметри в wp-config.php файла.',
            'icon' => 'fa-database'
        ],
        'security_settings' => [
            'title' => 'Настройки за сигурност',
            'description' => 'Прилагаме допълнителни мерки за сигурност за защита на WordPress сайтове и WooCommerce магазини. Включва защита срещу brute force атаки и други сигурностни настройки.',
            'icon' => 'fa-shield-alt'
        ],
        'updates' => [
            'title' => 'Обновяване на плъгини, теми и WordPress ядро',
            'description' => 'Извършваме месечни обновления на WordPress ядрото, плъгини и теми. Преди всяка актуализация създаваме резервно копие за безопасност.',
            'icon' => 'fa-sync-alt'
        ],
        'woocommerce_settings' => [
            'title' => 'Настройки на WooCommerce',
            'description' => 'Предоставяме експертна помощ за настройка на основния WooCommerce плъгин. Помагаме с конфигурирането на магазина, продукти, плащания и доставки.',
            'icon' => 'fa-shopping-cart'
        ],
        'cache_plugin' => [
            'title' => 'Конфигуриране на cache плъгин',
            'description' => 'Настройваме и оптимизираме кеширащи плъгини за максимална производителност. Включва конфигуриране на LiteSpeed Cache или други подходящи решения.',
            'icon' => 'fa-rocket'
        ],
        'site_optimization' => [
            'title' => 'Оптимизация на сайт',
            'description' => 'Извършваме комплексна оптимизация на WordPress сайтове и WooCommerce магазини. Включва анализ на производителността и препоръки за подобрения.',
            'icon' => 'fa-chart-line'
        ],
        'site_monitoring' => [
            'title' => 'Мониторинг на сайт',
            'description' => 'Следим за коректното функциониране на началната страница на сайта. При възникване на проблеми ви уведомяваме незабавно за бързо отстраняване.',
            'icon' => 'fa-eye'
        ],
        'error_500' => [
            'title' => 'Съдействие при Error 500',
            'description' => 'Диагностицираме и решаваме критични грешки като Error 500. Локализираме причината за проблема и прилагаме подходящото решение.',
            'icon' => 'fa-bug'
        ],
        'admin_help' => [
            'title' => 'Помощ при работа с админ панела',
            'description' => 'Предоставяме експертна помощ за навигация и използване на WordPress административния панел. Помагаме с намирането на функции и настройки.',
            'icon' => 'fa-question-circle'
        ],
        'dev_environment' => [
            'title' => 'Създаване на Dev среда',
            'description' => 'Създаваме тестова среда за безопасно тестване на нови функционалности, плъгини и теми. Включва отделна база данни и файлова система.',
            'icon' => 'fa-code-branch'
        ],
        'performance_audit' => [
            'title' => 'Одит при бавен сайт',
            'description' => 'Извършваме детайлен анализ на производителността на бавно зареждащи се сайтове. Предоставяме препоръки за оптимизация и прилагаме решения.',
            'icon' => 'fa-tachometer-alt'
        ],
        'other' => [
            'title' => 'Друго?',
            'description' => 'За всички други WordPress и WooCommerce свързани услуги, които не са описани по-горе, моля свържете се с нас за персонализирана консултация.',
            'icon' => 'fa-ellipsis-h'
        ]
    ],

    // FAQ Section
    'faq' => [
        [
            'question' => 'Какви са предимствата на вашите хостинг планове?',
            'answer' => 'Нашите планове включват SSD хранилище, безплатен SSL сертификат, CDN за по-бързо зареждане, автоматични резервни копия и 24/7 техническа поддръжка. Всичко това на конкурентни цени.'
        ],
        [
            'question' => 'Има ли скрити такси или дългосрочни договори?',
            'answer' => 'Не! Ние предлагаме прозрачно ценообразуване без скрити такси. Няма дългосрочни договори - можете да отмените услугата по всяко време. Цената, която виждате, е финалната цена.'
        ],
        [
            'question' => 'Как работи безплатната миграция на сайтове?',
            'answer' => 'Нашите експерти ще преместят вашия сайт от текущия хостинг до нас без прекъсване на услугата. Процесът включва прехвърляне на файлове, база данни и настройка на домейна.'
        ],
        [
            'question' => 'Каква е гаранцията за uptime на сървърите?',
            'answer' => 'Гарантираме 99.9% uptime на всички наши сървъри. Ако не постигнем тази цел, ще получите компенсация според нашите SLA условия.'
        ],
        [
            'question' => 'Какво включва техническата поддръжка?',
            'answer' => 'Предоставяме 24/7 техническа поддръжка чрез чат, имейл и телефон. Нашите експерти могат да помогнат с всички въпроси свързани с хостинга, включително настройки и оптимизация.'
        ],
        [
            'question' => 'Мога ли да надградя плана по-късно?',
            'answer' => 'Да, можете да надградите вашия план по всяко време без прекъсване на услугата. Промяната се извършва незабавно и плащате само разликата в цената.'
        ],
        [
            'question' => 'Какви са разликите между плановете?',
            'answer' => 'Стартер планът е идеален за малки сайтове, Професионалният за растещи бизнеси, а Корпоративният за големи проекти. Основните разлики са в ресурсите, производителността и допълнителните функции.'
        ],
        [
            'question' => 'Има ли безплатен период за тестване?',
            'answer' => 'Да, предлагаме 30-дневна гаранция за всички планове. Ако не сте доволни от услугата, ще получите пълно възстановяване на сумата.'
        ]
    ]
];

// Helper function to get config values
function get_config($key, $default = null) {
    global $config;
    $keys = explode('.', $key);
    $value = $config;
    
    foreach ($keys as $k) {
        if (isset($value[$k])) {
            $value = $value[$k];
        } else {
            return $default;
        }
    }
    
    return $value;
}

// Helper function to echo config values safely
function echo_config($key, $default = '') {
    echo htmlspecialchars(get_config($key, $default));
}
?>
