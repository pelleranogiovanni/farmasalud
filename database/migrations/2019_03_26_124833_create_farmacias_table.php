<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmaciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('farmacias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cufe');
            $table->string('razonsocial');
            $table->integer('cuit');
            $table->string('encargado');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('localidad');
            $table->string('provincia');
            $table->string('email');
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
        Schema::dropIfExists('farmacias');
    }
}
