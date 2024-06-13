<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AnimalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('animal_types')->insert([
          [
            'type' => 'Dog'
          ],
          [
            'type' => 'Cat'
          ]
        ]);
    }
}
