<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    // Company Information
    public string $site_name;
    public string $tagline;
    public string $phone;
    public string $email;
    public string $address;
    public string $website;
    
    // Social Media Links
    public string $facebook;
    public string $twitter;
    public string $linkedin;
    public string $instagram;
    public string $youtube;
    
    // Contact Information
    public string $support_hours;
    public string $response_time;
    public string $emergency_phone;
    
    // Features
    public string $uptime;
    public string $customers;
    public string $experience;
    public string $support;
    
    // SEO Settings
    public string $seo_title;
    public string $seo_description;
    public string $seo_keywords;
    public string $seo_author;

    public static function group(): string
    {
        return 'general';
    }
}
