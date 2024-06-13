<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderServiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
          'order' => $this->orders->id,
          'user' => $this->orders->user->name,
          'quantity' => $this->quantity,
          'name' => $this->services->name,
          'price' => $this->services->price,
      ];
    }
}
