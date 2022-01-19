<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('curso')->nullable();
            $table->string('letra', 512)->nullable();
            $table->string('nombre', 512)->nullable();
            $table->bigInteger('tutor')->nullable();
            $table->bigInteger('anyoescolar')->unsigned();
            $table->bigInteger('nivel')->unsigned();
            $table->boolean('verificado')->nullable();
            $table->bigInteger('creador')->unsigned();
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
        Schema::dropIfExists('grupos');
    }
}
