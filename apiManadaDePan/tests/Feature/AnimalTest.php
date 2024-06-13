<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Animal;
use App\Models\AnimalType;

class AnimalTest extends TestCase
{
    use RefreshDatabase;

    public function test_list_all_animals()
    {
      $response = $this->get('/api/animals');

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'name',
                    'breed',
                    'sex',
                    'age',
                    "type"
                ]
            ]
        ]);

    }
}
