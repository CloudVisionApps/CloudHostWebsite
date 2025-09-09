<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class WordPressPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // WordPress Support Plans data from config.php
        $wordpressPlans = [
            [
                'name' => 'WordPress Основен',
                'slug' => 'wordpress-basic',
                'description' => 'За малки сайтове и блогове с основни нужди',
                'monthly_price' => 29.99,
                'yearly_price' => 299.99,
                'currency' => 'лв.',
                'storage_gb' => null, // Not applicable for support plans
                'bandwidth_gb' => null, // Not applicable for support plans
                'domains' => 1,
                'subdomains' => null,
                'databases' => null,
                'email_accounts' => null,
                'ftp_accounts' => null,
                'ssl_certificate' => true,
                'backup' => true,
                'support_24_7' => false,
                'is_featured' => false,
                'is_active' => true,
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
                'sort_order' => 4,
            ],
            [
                'name' => 'WordPress Професионален',
                'slug' => 'wordpress-professional',
                'description' => 'За бизнес сайтове и WooCommerce магазини',
                'monthly_price' => 59.99,
                'yearly_price' => 599.99,
                'currency' => 'лв.',
                'storage_gb' => null, // Not applicable for support plans
                'bandwidth_gb' => null, // Not applicable for support plans
                'domains' => 3,
                'subdomains' => null,
                'databases' => null,
                'email_accounts' => null,
                'ftp_accounts' => null,
                'ssl_certificate' => true,
                'backup' => true,
                'support_24_7' => false,
                'is_featured' => true,
                'is_active' => true,
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
                'sort_order' => 5,
            ],
            [
                'name' => 'WordPress Корпоративен',
                'slug' => 'wordpress-enterprise',
                'description' => 'За големи корпорации и високонатоварени сайтове',
                'monthly_price' => 119.99,
                'yearly_price' => 1199.99,
                'currency' => 'лв.',
                'storage_gb' => null, // Not applicable for support plans
                'bandwidth_gb' => null, // Not applicable for support plans
                'domains' => null, // Unlimited
                'subdomains' => null,
                'databases' => null,
                'email_accounts' => null,
                'ftp_accounts' => null,
                'ssl_certificate' => true,
                'backup' => true,
                'support_24_7' => true,
                'is_featured' => false,
                'is_active' => true,
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
                'sort_order' => 6,
            ],
        ];

        foreach ($wordpressPlans as $plan) {
            Plan::create($plan);
        }
    }
}
