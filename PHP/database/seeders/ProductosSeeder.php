<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('productos')->insert([
        [
          'nombre' => 'Comida para perros',
          'descripcion' => 'Comida de perros alta en proteninas y vegetales',
          'precio' => '23'
        ],
        [
          'nombre' => 'Champu para perros',
          'descripcion' => 'Champu para perros de maxima calidad',
          'precio' => '12'
        ]
      ]);
    }
}
