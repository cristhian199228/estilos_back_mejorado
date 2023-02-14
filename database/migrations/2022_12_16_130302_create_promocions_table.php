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
        Schema::create('promocions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('foto_id')->constrained();
            $table->foreignId('plantilla_id')->constrained();
            $table->integer('usar_texto_establecimiento');
            $table->integer('estado_solicitud');
            $table->string('direccion');
            $table->string('telefono', 15);
            $table->string('horario');
            $table->string('vigencia');
            $table->string('restricciones');
            $table->string('acepta');
            $table->integer('estado');
            $table->json('json');
            $table->string('descargas');
            $table->string('ruta_logo')->nullable();
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
        Schema::dropIfExists('promocions');
    }
};
