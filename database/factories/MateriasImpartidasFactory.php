<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MateriasImpartidasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'docente'=>$this->faker->numberBetween(1, 25),
            'grupo'=>$this->faker->numberBetween(1, 12),
            'materia'=>$this->faker->numberBetween(1, 25),
        ];
    }
}
