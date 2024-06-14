<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('users')->insert([
        [
          'name' => 'Lusia',
          'email' => 'Lusia@example.com',
          'password' => '1234'
        ],
        [
          'name' => 'Lorrany',
          'email' => 'Loh@example.com',
          'password' => '1234'
        ]
      ]);
    }
}
