<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MateriaMatriculadaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'alumno'=>$this->faker->numberBetween(1, 25),
            'materia'=>$this->faker->numberBetween(1, 25),
            'grupo'=>$this->faker->numberBetween(1, 12),
        ];
    }
}
