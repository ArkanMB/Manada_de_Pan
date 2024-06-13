<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('animals')->insert([
          [
            'name' => 'Reina',
            'breed' => 'Pitbull',
            'sex' => 'Female',
            'age' => '5',
            'animal_type_id' => '1'
          ],
          [
            'name' => 'Mirchi',
            'breed' => 'Persa',
            'sex' => 'Male',
            'age' => '3',
            'animal_type_id' => '2'
          ]
        ]);
    }
}
