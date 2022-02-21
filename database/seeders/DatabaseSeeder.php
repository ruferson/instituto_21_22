<?php

namespace Database\Seeders;

use App\Models\Grupo;
use App\Models\Matricula;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User    ::truncate();
    	Grupo::truncate();
    	Matricula::truncate();
        Grupo::factory(20)->create();
        Matricula::factory(15)->create();
        DB::table('users')->insert([
            'name' => 'Rubén Fernández Sánchez',
            'email' => '1173665@alu.murciaeduca.es',
            'password' => Hash::make('password'),
            'usuario_av' => 80686,
        ]);
    }
}
