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
            $table->bigIncrements('id');
            // $table->string('cod_empresa',7);
            $table->integer('usuario');
            $table->text('nombre_empresa');
            $table->text('actividad');
            $table->bigInteger('nit');
            $table->text('archivo_seleccionado');
            $table->text('mision');
            $table->text('vision');
            $table->text('valores');
            $table->text('conocenos');
            $table->text('historia');
            $table->text('direccion');
            $table->text('pais');
            $table->text('estado_departamento');
            $table->text('ciudad');
            $table->integer('telefono');
            $table->text('correo');
            $table->timestamps();
            $table->boolean('estado');
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
