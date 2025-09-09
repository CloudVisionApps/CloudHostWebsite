<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'selfworksbg@gmail.com',
            'email' => 'selfworksbg@gmail.com',
            'password' => bcrypt('selfworksbg@gmail.com'),
        ]);

        $this->call([
           DomainSeeder::class,
           FAQSeeder::class,
            PlanGroupSeeder::class,
            PlanFeatureGroupSeeder::class,
            PlanFeatureSeeder::class,
            WordPressPlanFeatureSeeder::class,
//            PlanSeeder::class,
           WordPressPlanSeeder::class,
        ]);
    }
}
