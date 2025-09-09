<?php
function settings($key, $default = null)
{
    $settings = new \App\Settings\GeneralSettings();
    if (property_exists($settings, $key)) {
        return $settings->$key;
    }

    return $default;
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
