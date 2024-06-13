<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
          [
            'user_id' => '1', 
          ],
          [
            'user_id' => '2', 
          ]
        ]);
    }
}
