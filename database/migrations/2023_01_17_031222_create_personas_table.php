<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido1');
            $table->string('apellido2')->nullable();
            $table->string('numero_identificacion');
            $table->string('tipo_identificacion');
            $table->string('pais');
            $table->string('ciudad');
            $table->string('calle');
            //Relacion de tipopersona a persona
            $table->unsignedBigInteger('tipo_persona_id',);
            $table->foreign('tipo_persona_id')->references('id')->on('tipo_personas');
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
        Schema::dropIfExists('personas');
    }
};
