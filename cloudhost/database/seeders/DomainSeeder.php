<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Domain;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TLD data from config.php
        $tlds = [
            [
                'tld' => '.com',
                'category' => 'Popular',
                'registration_yearly_price' => 11.99,
                'renewal_yearly_price' => 13.99,
                'transfer_yearly_price' => 11.49,
                'currency' => 'лв.',
            ],
            [
                'tld' => '.net',
                'category' => 'Standard',
                'registration_yearly_price' => 10.99,
                'renewal_yearly_price' => 12.99,
                'transfer_yearly_price' => 10.49,
                'currency' => 'лв.',
            ],
            [
                'tld' => '.org',
                'category' => 'Standard',
                'registration_yearly_price' => 9.99,
                'renewal_yearly_price' => 11.99,
                'transfer_yearly_price' => 9.49,
                'currency' => 'лв.',
            ],
            [
                'tld' => '.bg',
                'category' => 'Local favorite',
                'registration_yearly_price' => 19.99,
                'renewal_yearly_price' => 22.99,
                'transfer_yearly_price' => 19.49,
                'currency' => 'лв.',
            ],
            [
                'tld' => '.eu',
                'category' => 'Standard',
                'registration_yearly_price' => 8.49,
                'renewal_yearly_price' => 9.99,
                'transfer_yearly_price' => 7.99,
                'currency' => 'лв.',
            ],
            [
                'tld' => '.io',
                'category' => 'Startup',
                'registration_yearly_price' => 29.99,
                'renewal_yearly_price' => 34.99,
                'transfer_yearly_price' => 28.99,
                'currency' => 'лв.',
            ],
            [
                'tld' => '.dev',
                'category' => 'Standard',
                'registration_yearly_price' => 13.99,
                'renewal_yearly_price' => 15.99,
                'transfer_yearly_price' => 12.99,
                'currency' => 'лв.',
            ],
            [
                'tld' => '.shop',
                'category' => 'E‑commerce',
                'registration_yearly_price' => 15.99,
                'renewal_yearly_price' => 18.99,
                'transfer_yearly_price' => 14.99,
                'currency' => 'лв.',
            ],
            [
                'tld' => '.info',
                'category' => 'Standard',
                'registration_yearly_price' => 7.99,
                'renewal_yearly_price' => 9.49,
                'transfer_yearly_price' => 7.49,
                'currency' => 'лв.',
            ],
            [
                'tld' => '.me',
                'category' => 'Standard',
                'registration_yearly_price' => 8.99,
                'renewal_yearly_price' => 10.49,
                'transfer_yearly_price' => 8.49,
                'currency' => 'лв.',
            ],
            [
                'tld' => '.xyz',
                'category' => 'Promo',
                'registration_yearly_price' => 3.99,
                'renewal_yearly_price' => 7.99,
                'transfer_yearly_price' => 3.49,
                'currency' => 'лв.',
            ],
            [
                'tld' => '.tech',
                'category' => 'Standard',
                'registration_yearly_price' => 17.99,
                'renewal_yearly_price' => 19.99,
                'transfer_yearly_price' => 16.99,
                'currency' => 'лв.',
            ],
        ];

        foreach ($tlds as $tld) {
            Domain::create($tld);
        }
    }
}
