<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidencias', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('tipo'); //TRUE = encontrado / FALSE = perdido
            $table->boolean('estado')->default(false); //TRUE = regresado / FALSE = ausente
            $table->Date('fechaIncidente');
            $table->Date('fechaResuelto')->nullable();
            $table->string('edificio');
            $table->string('aula')->nullable();
            $table->string('ubicacionActual');
            $table->string('nombre')->nullable();
            $table->string('contacto')->nullable();
            $table->unsignedInteger('objeto_id');
            $table->foreign('objeto_id')->references('id')->on('objetos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidencias');
    }
}
