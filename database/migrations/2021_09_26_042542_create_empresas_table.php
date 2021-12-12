<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->text('nombreEmpresa', 25);
            $table->string('logo');
            $table->string('icono');
            $table->string('imgFooter');
            $table->char('direccion', 50);
            $table->char('telefono', 8);
            $table->char('facebook', 100);
            $table->char('instagram', 100);
            $table->text('conocenos');
            $table->text('mapa');
            $table->text('sobreNosotros');
            $table->string('tituloHome');
            $table->string('tituloConocenos');
            $table->string('parrafoConocenos');
            $table->string('tituloMenu');
            $table->string('tituloContacto');
            $table->string('imagenHome');
            $table->string('imagenHome2');
            $table->string('imagenFija');
            $table->string('imgConocenos');
            $table->string('imgConocenos2');
            $table->string('imagenFija2');
            $table->string('imgMenu');
            $table->string('imgContacto');
            $table->timestamps();
        });

        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->integer('day');
            $table->time('open_time');
            $table->time('close_time');
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
        Schema::dropIfExists('empresas');
        Schema::dropIfExists('horarios');
    }
}
