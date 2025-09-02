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
                    'node_js' => 'v16, v18',
                    'python' => '3.8, 3.9, 3.10',
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
                    'node_js' => 'v16, v18, v20',
                    'python' => '3.8, 3.9, 3.10, 3.11, 3.12',
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
                    'node_js' => 'v16, v18, v20, v21',
                    'python' => '3.8, 3.9, 3.10, 3.11, 3.12',
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
