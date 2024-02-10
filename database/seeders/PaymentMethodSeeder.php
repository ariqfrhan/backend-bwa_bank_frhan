<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payment_methods')->insert(
            [
                [
                    'name' => 'Bank Frhan',
                    'code' => 'frhan',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Bank BNI',
                    'code' => 'bni_va',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Bank BCA',
                    'code' => 'bca_va',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Bank BRA',
                    'code' => 'bri_va',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
