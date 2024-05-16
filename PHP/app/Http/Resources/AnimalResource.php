<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AnimalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
      return [
        'id'     => $this->id,
        'nombre' => 'Nombre: ' . $this->nombre,
        'tipo'   => 'Tipo: ' . $this->tipo,
        'raza'   => 'Raza: ' . $this->raza,
        'sexo'   => 'Sexo: ' . $this->sexo,
        'edad'   => 'Edad: ' . $this->edad
      ];
    }
}
