<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OperatorCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('operator_cards')->insert(
            [
                [
                    'name' => 'Telkomsel',
                    'status' => 'active',
                    'thumbnail' => 'ic_telkomsel.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Indosat',
                    'status' => 'active',
                    'thumbnail' => 'ic_indosat.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Singtel',
                    'status' => 'active',
                    'thumbnail' => 'ic_singtel.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],  
            ]
        );
    }
}
