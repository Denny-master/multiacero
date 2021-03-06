<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactoProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacto_proveedores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('usuario');
            $table->text('persona');
            $table->text('profesion');
            $table->text('cargo');
            $table->integer('telefono_coorporativo');
            $table->text('correo_coorporativo');
            $table->date('fecha_inicio');
            $table->time('hora_inicio');
            $table->text('descripcion_inicio_actividades');
            $table->date('fecha_finalizacion')->nullable();
            $table->time('hora_finalizacion')->nullable();
            $table->text('descripcion_finalizacion_actividades')->nullable();
            $table->timestamps();
            $table->boolean('estado');
            $table->text('id_proveedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacto_proveedores');
    }
}
