<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('inscripcions');
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ficha',500);
            $table->string('documento',500);
            $table->string('comentarios',500);
            $table->unsignedBigInteger('curso');
            $table->foreign('curso')->references('id')->on('eventos'); 
            $table->unsignedBigInteger('status');
            $table->foreign('status')->references('id')->on('statuses'); 
            $table->unsignedBigInteger('participante');
            $table->foreign('participante')->references('id')->on('participantes');                                     
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
        Schema::dropIfExists('inscripcions');
    }
}
