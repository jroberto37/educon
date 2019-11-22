<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('cursos');
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',250);
            $table->string('titulo',500);
            $table->longText('descripcion');
            $table->string('duracion',150);
            $table->string('esfuerzo',150);
            $table->string('tema',250);
            $table->string('nivel',100);
            $table->string('imagen',500);
            $table->unsignedBigInteger('tipo');
            $table->foreign('tipo')->references('id')->on('tipos');
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
        Schema::dropIfExists('cursos');
    }
}
