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
            'name' => 'Pienso perros medianos',
            'description' => '500 gr de ingredientes naturales y equilibrados, proporcionando una nutrición óptima para su salud y vitalidad. Con sabor irresistible y nutrientes esenciales, asegura el bienestar y la energía de tu mascota.',
            'price' => '20',
            'type' => 'Producto'
          ],
          [
            'name' => 'Pienso gatos pequeños',
            'description' => '500 gr de pienso para gatos pequeños ofrece una nutrición completa y equilibrada, adaptada a todas las edades y razas. Rico en proteínas y nutrientes esenciales, garantiza la salud y felicidad de tu felino.',
            'price' => '20',
            'type' => 'Producto'
          ],
          [
            'name' => 'Juguete para perros',
            'description' => '3 huesos de juguete para tus perros, perfecto para satisfacer la necesidad instintiva de morder de tu mascota. Hechos con materiales duraderos y seguros, promueven la salud dental y el bienestar físico de tu compañero.',
            'price' => '10',
            'type' => 'Producto'
          ],
          [
            'name' => 'Juguete para gatos',
            'description' => 'Pelota estática para gatos, la opción ideal para mantener a tu felino activo y entretenido. Con un diseño bien divertido y estimulante, este juguete ofrece momentos de diversión, satisfaciendo sus instintos de caza.',
            'price' => '17',
            'type' => 'Producto'
          ],
          [
            'name' => 'Cuidado y estética',
            'description' => 'Servicio de cuidado y estética para perros y gatos garantizando que tus queridas mascotas reciban atención experta y amorosa. Incluye baño relajante y corte de pelo. Nos dedicamos plenamente a mantener a tus compañeros felices, saludables y con estilo.',
            'price' => '30',
            'type' => 'Servicio'
          ],
          [
            'name' => 'Atención veterinaria',
            'description' => 'Nuestra atención veterinaria ofrece un enfoque compasivo y experto para mantener a tus mascotas saludables y felices. Incluye chequeo regular (tratamiento especializado se verá en consulta), nuestro equipo de veterinarios está comprometido a brindar el más alto nivel de cuidado.',
            'price' => '16',
            'type' => 'Servicio'
          ],
          [
            'name' => 'Paseo con voluntarios',
            'description' => 'El servicio de paseos con voluntarios proporciona a tus mascotas peludas la gran oportunidad de poder ejercitarse, explorar y socializar en un entorno seguro y supervisado. Garantizamos que cada paseo sea una experiencia divertida y enriquecedora para tu compañero. Incluye paseo de 40 min.',
            'price' => '13',
            'type' => 'Servicio'
          ],
          [
            'name' => 'Alojamiento y guardería',
            'description' => 'Nuestra guardería ofrece un ambiente acogedor y seguro para tus mascotas mientras estás ocupado. Con un equipo atento, proporcionamos cuidado las 24 horas del día, asegurando que tus amigos peludos reciban atención, juegos divertidos y amor constante. Precio por día.',
            'price' => '20',
            'type' => 'Servicio'
          ],
        ]);
    }
}
