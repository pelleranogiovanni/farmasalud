<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigoproducto');
            $table->integer('gtin');
            $table->string('nombregenerico');
            $table->string('presentacion');
            $table->string('nombrecomercial');
            $table->integer('numerocertificado');
            $table->string('laboratorio');
            $table->string('formafarmaceutica');
            $table->string('viaadministracion');
            $table->string('condicionexpendio');
            $table->integer('glnproveedor');
            $table->integer('tipoproducto');
            $table->integer('numerotroquel');
            $table->boolean('trazable');
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
        Schema::dropIfExists('productos');
    }
}
