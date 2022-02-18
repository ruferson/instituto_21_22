<?php

namespace Tests\Feature;

use App\Models\Centro;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class CentroCoordinadoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_UserGrupos()
    {
        Sanctum::actingAs(
            User::factory()->has(Centro::factory(), 'centroCoordinado')->create()
        );
        $response = $this->get('/api/miCentro');
        $response->assertStatus(200)
        ->assertJsonStructure(['data' => ['codigo', 'nombre', 'web']])
        ->assertJsonCount(1);
    }
}
