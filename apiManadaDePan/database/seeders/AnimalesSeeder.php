<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AnimalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('animales')->insert([
        [
          'nombre' => 'Reina',
          'tipo' => 'Perro',
          'raza' => 'Bully Frances',
          'sexo' => 'Hembra',
          'edad' => '9'
        ],
        [
          'nombre' => 'Mirchi',
          'tipo' => 'Gato',
          'raza' => 'Persa',
          'sexo' => 'Macho',
          'edad' => '3'
        ]
      ]);
    }
}
