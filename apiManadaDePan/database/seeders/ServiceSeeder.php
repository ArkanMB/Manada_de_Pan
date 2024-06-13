<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
          [
            'name' => 'Corte pelo perro',
            'description' => 'El mejor corte de pelo para perros',
            'price' => '15',
            'type' => 'Servicio'
          ],
          [
            'name' => 'champu',
            'description' => 'Corte de pelo',
            'price' => '15',
            'type' => 'Producto'
          ]
        ]);
    }
}
