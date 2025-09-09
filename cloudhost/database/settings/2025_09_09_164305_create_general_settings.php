<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        // Company Information
        $this->migrator->add('general.site_name', 'CloudHost.bg');
        $this->migrator->add('general.tagline', 'Премиум Cloud Решения');
        $this->migrator->add('general.phone', '+359 (888) 123-456');
        $this->migrator->add('general.email', 'support@cloudhost.bg');
        $this->migrator->add('general.address', 'ул. Cloud 123, Техноград, БГ 1000');
        $this->migrator->add('general.website', 'https://cloudhost.bg');

        // Social Media Links
        $this->migrator->add('general.social_networks', [
            'facebook' => [
                'url' => 'https://facebook.com/cloudhostbg',
                'icon' => 'fab fa-facebook-f',
                'color' => '#3b5998',
                'name' => 'Facebook'
            ],
            'twitter' => [
                'url' => 'https://twitter.com/cloudhostbg',
                'icon' => 'fab fa-twitter',
                'color' => '#1da1f2',
                'name' => 'Twitter'
            ],
            'linkedin' => [
                'url' => 'https://linkedin.com/company/cloudhostbg',
                'icon' => 'fab fa-linkedin-in',
                'color' => '#0077b5',
                'name' => 'LinkedIn'
            ],
            'instagram' => [
                'url' => 'https://instagram.com/cloudhostbg',
                'icon' => 'fab fa-instagram',
                'color' => '#e4405f',
                'name' => 'Instagram'
            ]
        ]);

        // Contact Information
        $this->migrator->add('general.support_hours', '24/7 Поддръжка');
        $this->migrator->add('general.response_time', 'Под 2 часа');
        $this->migrator->add('general.emergency_phone', '+359 (888) 999-888');

        // Features
        $this->migrator->add('general.uptime', '99.9%');
        $this->migrator->add('general.customers', '50K+');
        $this->migrator->add('general.experience', '15+');
        $this->migrator->add('general.support', '24/7');

        // SEO Settings
        $this->migrator->add('general.seo_title', 'CloudHost.bg - Премиум Cloud Хостинг Решения');
        $this->migrator->add('general.seo_description', 'Изживейте светкавична производителност, 99.9% гарантирана работа и корпоративна сигурност с нашите cloud хостинг решения.');
        $this->migrator->add('general.seo_keywords', 'cloud хостинг, уеб хостинг, VPS, сървъри, cloud решения');
        $this->migrator->add('general.seo_author', 'CloudHost.bg');
    }
};
