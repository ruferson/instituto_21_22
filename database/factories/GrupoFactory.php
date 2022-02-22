<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GrupoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'curso' => $this->faker->numberBetween(1, 4),
            'letra' => $this->faker->randomLetter(),
            'nombre' => $this->faker->name(),
            'tutor' => $this->faker->numberBetween(1, 20),
            'anyoescolar' => $this->faker->numberBetween(1, 3),
            'nivel' => $this->faker->numberBetween(1, 4),
            'verificado' => $this->faker->boolean(),
            'creador' => $this->faker->numberBetween(1, 20),
        ];
    }
}
