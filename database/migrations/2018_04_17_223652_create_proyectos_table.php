<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('autor');
            $table->string('tutor');
            $table->string('path');
            $table->integer('namecarre_id')->unsigned();
            $table->foreign('namecarre_id')->references('id')->on('carreras');
            $table->rememberToken();
            $table->timestamps();
            $table->integer('nameare_id')->unsigned();
            $table->foreign('nameare_id')->references('id')->on('areas');
            $table->integer('namemodal_id')->unsigned();
            $table->foreign('namemodal_id')->references('id')->on('modalidads');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
