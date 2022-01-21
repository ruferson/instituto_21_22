<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaltasProfesoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faltas_profesores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('profesor_falta')->unsigned();
            $table->bigInteger('profesor_guardia')->nullable();
            $table->bigInteger('periodoclase_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faltas_profesores');
    }
}
