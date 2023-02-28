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
        Schema::create('donacion_especies', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_donacion');
            $table->date('fecha_recibido');
            $table->date('descripcion');

            $table->unsignedBigInteger('persona_donante_id',);
            $table->foreign('persona_donante_id')->references('id')->on('personas');

            $table->unsignedBigInteger('articulo_id',);
            $table->foreign('articulo_id')->references('id')->on('articulos');
            
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
        Schema::dropIfExists('donacion_especies');
    }
};
