<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Plans data from config.php
        $plans = [
            [
                'name' => 'Стартер',
                'slug' => 'starter',
                'description' => 'Идеален за малки сайтове, блогове и лични проекти',
                'monthly_price' => 19.99,
                'yearly_price' => 167.92,
                'currency' => 'лв.',
                'storage_gb' => 10,
                'bandwidth_gb' => null, // Unlimited
                'domains' => 1,
                'subdomains' => 5,
                'databases' => 5,
                'email_accounts' => 5,
                'ftp_accounts' => 5,
                'ssl_certificate' => true,
                'backup' => true,
                'support_24_7' => true,
                'is_featured' => false,
                'is_active' => true,
                'features' => [
                    '10 GB SSD Хранилище',
                    'Неограничен Трафик',
                    '5 Бази Данни',
                    'Безплатен SSL Сертификат',
                    '24/7 Поддръжка'
                ],
                'sort_order' => 1,
            ],
            [
                'name' => 'Професионален',
                'slug' => 'professional',
                'description' => 'За растещи бизнеси, e-commerce сайтове и корпоративни приложения',
                'monthly_price' => 39.99,
                'yearly_price' => 335.92,
                'currency' => 'лв.',
                'storage_gb' => 50,
                'bandwidth_gb' => null, // Unlimited
                'domains' => 5,
                'subdomains' => 25,
                'databases' => 25,
                'email_accounts' => 25,
                'ftp_accounts' => 25,
                'ssl_certificate' => true,
                'backup' => true,
                'support_24_7' => true,
                'is_featured' => true,
                'is_active' => true,
                'features' => [
                    '50 GB SSD Хранилище',
                    'Неограничен Трафик',
                    '25 Бази Данни',
                    'Безплатен SSL Сертификат',
                    'CDN Включен',
                    'Приоритетна Поддръжка'
                ],
                'sort_order' => 2,
            ],
            [
                'name' => 'Корпоративен',
                'slug' => 'enterprise',
                'description' => 'За големи проекти, корпорации и високонатоварени приложения',
                'monthly_price' => 79.99,
                'yearly_price' => 671.92,
                'currency' => 'лв.',
                'storage_gb' => 200,
                'bandwidth_gb' => null, // Unlimited
                'domains' => null, // Unlimited
                'subdomains' => null, // Unlimited
                'databases' => null, // Unlimited
                'email_accounts' => null, // Unlimited
                'ftp_accounts' => null, // Unlimited
                'ssl_certificate' => true,
                'backup' => true,
                'support_24_7' => true,
                'is_featured' => false,
                'is_active' => true,
                'features' => [
                    '200 GB SSD Хранилище',
                    'Неограничен Трафик',
                    'Неограничени Бази Данни',
                    'Безплатен SSL Сертификат',
                    'CDN + DDoS Защита',
                    'VIP Поддръжка'
                ],
                'sort_order' => 3,
            ],
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
