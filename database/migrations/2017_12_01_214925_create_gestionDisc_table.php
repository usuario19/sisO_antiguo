<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGestionDiscTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestionDisc', function (Blueprint $table) {
            $table->integer('id_gestion')->unsigned();
            $table->foreign('id_gestion')->references('id_gestion')->on('gestion');
            $table->integer('id_disciplina')->unsigned();
            $table->foreign('id_disciplina')->references('id_disc')->on('disciplinas');
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
        Schema::dropIfExists('gestionDisc');
    }
}
