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
            'price' => '9.99',
            'currency' => 'лв.',
            'period' => '/месец',
            'features' => [
                '10 GB SSD Хранилище',
                'Неограничен Трафик',
                '5 Имейл Акаунта',
                'Безплатен SSL Сертификат',
                '24/7 Поддръжка'
            ],
            'color' => 'blue'
        ],
        'professional' => [
            'name' => 'Професионален',
            'price' => '19.99',
            'currency' => 'лв.',
            'period' => '/месец',
            'popular' => true,
            'features' => [
                '50 GB SSD Хранилище',
                'Неограничен Трафик',
                '25 Имейл Акаунта',
                'Безплатен SSL Сертификат',
                'Ежедневни Резервни Копия',
                'Приоритетна Поддръжка'
            ],
            'color' => 'purple'
        ],
        'enterprise' => [
            'name' => 'Корпоративен',
            'price' => '39.99',
            'currency' => 'лв.',
            'period' => '/месец',
            'features' => [
                '200 GB SSD Хранилище',
                'Неограничен Трафик',
                'Неограничени Имейл Акаунти',
                'Безплатен SSL Сертификат',
                'Почасови Резервни Копия',
                'DDoS Защита',
                'Отделен IP Адрес'
            ],
            'color' => 'green'
        ]
    ],
    
    // SEO Settings
    'seo' => [
        'title' => 'CloudHost Pro - Премиум Cloud Хостинг Решения',
        'description' => 'Изживейте светкавична производителност, 99.9% гарантирана работа и корпоративна сигурност с нашите cloud хостинг решения.',
        'keywords' => 'cloud хостинг, уеб хостинг, VPS, сървъри, cloud решения',
        'author' => 'CloudHost Pro'
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
