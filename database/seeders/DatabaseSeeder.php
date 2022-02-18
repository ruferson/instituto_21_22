<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Nota::factory(10)->create();
        \App\Models\Materia::factory(10)->create();
        \App\Models\MateriasImpartidas::factory(10)->create();
        \App\Models\MateriaMatriculada::factory(10)->create();
    }
}
