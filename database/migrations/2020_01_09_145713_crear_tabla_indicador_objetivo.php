<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaIndicadorObjetivo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicador_objetivo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('indicador_id');
            $table->unsignedInteger('objetivo_id');
            $table->unsignedInteger('unidad_id');
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
        Schema::dropIfExists('indicador_objetivo');
    }
}
