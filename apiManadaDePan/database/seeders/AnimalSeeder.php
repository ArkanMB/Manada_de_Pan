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
            'name' => 'Coke',
            'breed' => 'Golden Retriever',
            'sex' => 'Male',
            'age' => '3',
            'animal_type_id' => '1'
          ],
          [
            'name' => 'Duna',
            'breed' => 'Mixbreed',
            'sex' => 'Male',
            'age' => '8',
            'animal_type_id' => '1'
          ],
          [
            'name' => 'Neo',
            'breed' => 'Breton',
            'sex' => 'Male',
            'age' => '5',
            'animal_type_id' => '1'
          ],
          [
            'name' => 'Vicky',
            'breed' => 'Chiguagua',
            'sex' => 'Female',
            'age' => '1',
            'animal_type_id' => '1'
          ],
          [
            'name' => 'Otto',
            'breed' => 'Siamese',
            'sex' => 'Male',
            'age' => '2',
            'animal_type_id' => '2'
          ],
          [
            'name' => 'Ari',
            'breed' => 'Black Cat',
            'sex' => 'Female',
            'age' => '4',
            'animal_type_id' => '2'
          ],
          [
            'name' => 'Lusi',
            'breed' => 'Abisinio',
            'sex' => 'Female',
            'age' => '5',
            'animal_type_id' => '2'
          ],
          [
            'name' => 'Aerys',
            'breed' => 'American',
            'sex' => 'Female',
            'age' => '3',
            'animal_type_id' => '2'
          ],
        ]);
    }
}
