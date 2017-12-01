<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioPermisoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarioPermiso', function (Blueprint $table) {
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('ci')->on('usuarios');
            $table->integer('id_permiso')->unsigned();
            $table->foreign('id_permiso')->references('id_permiso')->on('permisos');
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
        Schema::dropIfExists('usuarioPermiso');
    }
}
