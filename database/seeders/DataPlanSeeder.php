<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_plans')->insert(
            [
                [
                    'name' => '10 GB',
                    'price' => 90000,
                    'operator_card_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => '25 GB',
                    'price' => 180000,
                    'operator_card_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => '50 GB',
                    'price' => 300000,
                    'operator_card_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => '100 GB',
                    'price' => 900000,
                    'operator_card_id' => 1,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => '10 GB',
                    'price' => 90000,
                    'operator_card_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => '25 GB',
                    'price' => 180000,
                    'operator_card_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => '50 GB',
                    'price' => 300000,
                    'operator_card_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => '100 GB',
                    'price' => 900000,
                    'operator_card_id' => 2,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => '10 GB',
                    'price' => 90000,
                    'operator_card_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => '25 GB',
                    'price' => 180000,
                    'operator_card_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => '50 GB',
                    'price' => 300000,
                    'operator_card_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => '100 GB',
                    'price' => 900000,
                    'operator_card_id' => 3,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
