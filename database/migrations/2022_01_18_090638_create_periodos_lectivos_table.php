<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodosLectivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodos_lectivos', function (Blueprint $table) {
            $table->id();
            $table->enum('dia',array('lunes', 'martes', 'miercoles', 'jueves', 'viernes'));
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->bigInteger('Anyoescolar_id')->unsigned();
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
        Schema::dropIfExists('periodos_lectivos');
    }
}
