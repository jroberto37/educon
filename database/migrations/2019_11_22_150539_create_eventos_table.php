<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('eventos');
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->datetime('inicio');
            $table->datetime('fin');
            $table->double('costoinicial');
            $table->double('costofinal');
            $table->integer('cupo');
            $table->string('ficha',500);
            $table->string('documento',500);
            $table->unsignedBigInteger('curso');
            $table->foreign('curso')->references('id')->on('cursos');            
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
        Schema::dropIfExists('eventos');
    }
}
