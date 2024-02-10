<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaction_types')->insert(
            [
                [
                    'name' => 'Transfer',
                    'code' => 'transfer',
                    'action' => 'dr',
                    'thumbnail' => 'ic_transaction_transfer.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Internet',
                    'code' => 'internet',
                    'action' => 'dr',
                    'thumbnail' => 'ic_transaction_shop.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Top Up',
                    'code' => 'top_up',
                    'action' => 'cr',
                    'thumbnail' => 'ic_transaction_withdraw.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Receive',
                    'code' => 'receive',
                    'action' => 'cr',
                    'thumbnail' => 'ic_transaction_topup.png',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
 
            ]
        );
    }
}
