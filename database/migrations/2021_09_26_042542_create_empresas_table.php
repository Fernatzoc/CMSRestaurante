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
            $table->char('direccion', 50);
            $table->char('telefono', 8);
            $table->char('facebook', 100);
            $table->char('instagram', 100);
            $table->text('conocenos');
            $table->text('sobreNosotros');
            $table->string('tituloHome');
            $table->string('tituloConocenos');
            $table->string('tituloMenu');
            $table->string('tituloContacto');
            $table->string('imagenHome');
            $table->string('imgConocenos');
            $table->string('imgMenu');
            $table->string('imgContacto');
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
    }
}
