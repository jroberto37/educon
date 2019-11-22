<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',250);
            $table->date('nacimiento',);
            $table->string('telefono',15);
            $table->string('domicilio',150);
            $table->string('municipioedo',250);
            $table->string('cp',5);
            $table->string('email',150);
            $table->string('imagen',500);
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
        Schema::dropIfExists('participantes');
    }
}
