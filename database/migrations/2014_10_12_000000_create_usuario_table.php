<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('ci')->primary;
            $table->string('nombre');
            $table->string('apellidos');
            $table->date('fecha_nac');
            $table->binary('foto');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('id club')->unsigned();
            $table->foreign('id_club')->references('id')->on('clubs');
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
}
