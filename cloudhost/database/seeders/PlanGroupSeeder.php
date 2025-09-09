<?php

namespace Database\Seeders;

use App\Models\PlanGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PlanGroup::create([
            'name' => 'Shared Hosting',
            'description' => 'Affordable and reliable shared hosting plans for personal and small business websites.',
            'sort_order' => 1,
//            'is_active' => true,
        ]);
        PlanGroup::create([
            'name' => 'VPS Hosting',
            'description' => 'Powerful and scalable VPS hosting solutions for growing websites and applications.',
            'sort_order' => 2,
//            'is_active' => true,
        ]);
        PlanGroup::create([
            'name' => 'Dedicated Servers',
            'description' => 'High-performance dedicated servers for resource-intensive applications and large-scale websites.',
            'sort_order' => 3,
//            'is_active' => true,
        ]);

        PlanGroup::create([
            'name' => 'Cloud Hosting',
            'description' => 'Flexible and scalable cloud hosting solutions for businesses of all sizes.',
            'sort_order' => 4,
//            'is_active' => true,
        ]);

        PlanGroup::create([
            'name' => 'WordPress Hosting',
            'description' => 'Optimized WordPress hosting plans for bloggers and businesses looking to enhance their online presence.',
            'sort_order' => 5,
//            'is_active' => true,
        ]);
        PlanGroup::create([
            'name' => 'Wordpress Support',
            'description' => 'Managed WordPress support plans for bloggers and businesses looking to enhance their online presence.',
            'sort_order' => 6,
//            'is_active' => true,
        ]);
    }
}
