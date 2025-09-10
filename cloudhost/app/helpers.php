<?php
function settings($key, $default = null)
{
    $settings = new \App\Settings\GeneralSettings();
    if (property_exists($settings, $key)) {
        return $settings->$key;
    }

    return $default;
}

function get_social_networks()
{
    $socialNetworks = settings('social_networks', []);

    // Ensure each social network has all required fields with defaults
    return array_map(function($network) {
        return [
            'name' => $network['name'] ?? 'Social Network',
            'url' => $network['url'] ?? '#',
            'icon' => $network['icon'] ?? 'fab fa-link',
            'color' => $network['color'] ?? '#1683ab'
        ];
    }, $socialNetworks);
}

function get_hosting_mega_menu_data()
{
    $getPlanGroups = \App\Models\PlanGroup::all();
    $megaMenuSections = [];
    foreach ($getPlanGroups as $planGroup) {
        // Generate slug from name if slug is null
        $slug = $planGroup->slug ?? \Illuminate\Support\Str::slug($planGroup->name);

        $megaMenuSections[] = new \App\Data\MegaMenuSectionData(
            name: $planGroup->name,
            description: $planGroup->description,
            url: route('plans.index', ['group' => $slug]),
            icon: $planGroup->icon,
            items: [],
        );
    }

    return new \App\Data\MegaMenuData(
        name: 'Виж всички хостинг решения',
        url: route('plans.index', ['group' => 'hosting']),
        icon: 'fa fa-server',
        sections: $megaMenuSections
    );
}

function get_contact_info()
{
    return [
        'email' => settings('email', 'support@example.com'),
        'phone' => settings('phone', '+359 888 123 456'),
        'address' => settings('address', 'София, България'),
        'website' => settings('website', 'https://example.com'),
        'support_hours' => settings('support_hours', 'Понеделник - Петък 9:00 - 18:00'),
        'response_time' => settings('response_time', 'Отговоряме в рамките на 24 часа'),
        'support' => settings('support', '24/7 - 365 дни в годината'),
        'emergency_phone' => settings('emergency_phone', '+359 888 123 456'),
    ];
}



// Helper function to extract numeric values from strings
if (!function_exists('extractNumericValue')) {
    function extractNumericValue($value) {
        if (is_numeric($value)) {
            return (int) $value;
        }

        // Extract number from strings like "10GB", "unlimited", "0"
        if (preg_match('/(\d+)/', $value, $matches)) {
            return (int) $matches[1];
        }

        // Handle unlimited cases
        if (stripos($value, 'unlimited') !== false || stripos($value, '-1') !== false) {
            return -1; // Use -1 to represent unlimited
        }

        return 0;
    }
}

