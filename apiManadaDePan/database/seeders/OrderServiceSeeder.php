<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class OrderServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_services')->insert([
          [
            'order_id' => '1', 
            'service_id' => '1',
            'quantity' => '2',
          ],
          [
            'order_id' => '1', 
            'service_id' => '2',
            'quantity' => '1',
          ]
        ]);
    }
}
