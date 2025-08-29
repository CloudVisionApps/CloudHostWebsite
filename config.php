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
            'yearly_period' => '/година',
            'yearly_discount' => '30%',
            'features' => [
                '10 GB SSD Хранилище',
                'Неограничен Трафик',
                '5 Бази Данни',
                'Безплатен SSL Сертификат',
                '24/7 Поддръжка'
            ],
            'color' => 'blue'
        ],
        'professional' => [
            'name' => 'Професионален',
            'description' => 'За растещи бизнеси, e-commerce сайтове и корпоративни приложения',
            'monthly_price' => '39.99',
            'yearly_price' => '335.92',
            'yearly_monthly_price' => '27.99',
            'currency' => 'лв.',
            'monthly_period' => '/месец',
            'yearly_period' => '/година',
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
            'color' => 'purple'
        ],
        'enterprise' => [
            'name' => 'Корпоративен',
            'description' => 'За големи проекти, корпорации и високонатоварени приложения',
            'monthly_price' => '79.99',
            'yearly_price' => '671.92',
            'yearly_monthly_price' => '55.99',
            'currency' => 'лв.',
            'monthly_period' => '/месец',
            'yearly_period' => '/година',
            'yearly_discount' => '30%',
            'features' => [
                '200 GB SSD Хранилище',
                'Неограничен Трафик',
                'Неограничени Бази Данни',
                'Безплатен SSL Сертификат',
                'CDN + DDoS Защита',
                'VIP Поддръжка'
            ],
            'color' => 'green'
        ]
    ],
    
    // SEO Settings
    'seo' => [
        'title' => 'CloudHost.bg - Премиум Cloud Хостинг Решения',
        'description' => 'Изживейте светкавична производителност, 99.9% гарантирана работа и корпоративна сигурност с нашите cloud хостинг решения.',
        'keywords' => 'cloud хостинг, уеб хостинг, VPS, сървъри, cloud решения',
        'author' => 'CloudHost.bg'
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
