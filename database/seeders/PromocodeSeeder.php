<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromocodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promocodes')->insert([
            [
                'promo_code' => 'CPD01',
                'percentage' => 10.00,
                'max_amount' => 50.00,
                'promo_description' => '10% off, Max discount is 50',
                'expiration' => Carbon::now()->addMonths(2),
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'promo_code' => 'CPD02',
                'percentage' => 20.00,
                'max_amount' => 75.00,
                'promo_description' => '20% off, Max discount is 75',
                'expiration' => Carbon::now()->addMonths(2),
                'status' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
