<?php
// Configuration file for CloudHost Pro website
// Modify these values to customize your website

// Company Information
$config = [
    'company' => [
        'name' => 'CloudHost.bg',
        'tagline' => 'Premium Cloud Solutions',
        'phone' => '+1 (555) 123-4567',
        'email' => 'support@cloudhost.bg',
        'address' => '123 Cloud Street, Tech City, TC 12345',
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
        'support_hours' => '24/7 Support',
        'response_time' => 'Under 2 hours',
        'emergency_phone' => '+1 (555) 999-8888'
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
            'name' => 'Starter',
            'price' => '9.99',
            'currency' => '$',
            'period' => '/month',
            'features' => [
                '10 GB SSD Storage',
                'Unlimited Bandwidth',
                '5 Email Accounts',
                'Free SSL Certificate',
                '24/7 Support'
            ],
            'color' => 'blue'
        ],
        'professional' => [
            'name' => 'Professional',
            'price' => '19.99',
            'currency' => '$',
            'period' => '/month',
            'popular' => true,
            'features' => [
                '50 GB SSD Storage',
                'Unlimited Bandwidth',
                '25 Email Accounts',
                'Free SSL Certificate',
                'Daily Backups',
                'Priority Support'
            ],
            'color' => 'purple'
        ],
        'enterprise' => [
            'name' => 'Enterprise',
            'price' => '39.99',
            'currency' => '$',
            'period' => '/month',
            'features' => [
                '200 GB SSD Storage',
                'Unlimited Bandwidth',
                'Unlimited Email Accounts',
                'Free SSL Certificate',
                'Hourly Backups',
                'DDoS Protection',
                'Dedicated IP'
            ],
            'color' => 'green'
        ]
    ],
    
    // SEO Settings
    'seo' => [
        'title' => 'CloudHost Pro - Premium Cloud Hosting Solutions',
        'description' => 'Experience lightning-fast performance, 99.9% uptime, and enterprise-grade security with our cloud hosting solutions.',
        'keywords' => 'cloud hosting, web hosting, VPS, dedicated servers, cloud solutions',
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
