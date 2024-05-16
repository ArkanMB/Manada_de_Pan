<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('servicios')->insert([
      [
        'nombre' => 'Paseo de perros',
        'descripcion' => 'Paseo de perros con un profesional',
        'precio' => '10'
      ],
      [
        'nombre' => 'Peluqueria canina',
        'descripcion' => 'Peluqueria canina con un profesional',
        'precio' => '20'
      ]
    ]);
    }
}
