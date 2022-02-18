<?php

namespace Tests\Feature;

use App\Models\Grupo;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class GruposUsuarioTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_UserGrupos()
    {
        Sanctum::actingAs(
            User::factory()
            ->hasAttached(
                Grupo::factory()->count(3)
            )
            ->create()
        );
        $response = $this->get('/api/grupos');
        $response->assertStatus(200)
        ->assertJsonStructure(['data' => [['curso', 'letra', 'nivel']]])
        ->assertJsonCount(3, 'data');
    }
}
