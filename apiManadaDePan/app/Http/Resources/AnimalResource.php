<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AnimalResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
          'name'  => $this->name,
          'breed' => $this->breed,
          'sex'   => $this->sex,
          'age'   => $this->age,
          'type' => $this->animaltype->type
        ];
    }
}
