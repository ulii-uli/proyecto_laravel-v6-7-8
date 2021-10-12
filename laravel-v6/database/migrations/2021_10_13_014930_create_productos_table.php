<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id',40);
            $table->string('nombre',40);
            $table->string('descripcion');

            //llaves foraneas declaradas

            $table->integer('img_id')->unsigned();
            $table->foreign('img_id')->references('id')->on('imagen');
            $table->integer('clasi_id')->unsigned();
            $table->foreign('clasi_id')->references('id')->on('clasificacion');
            $table->timestamps();

           // $table->integer('category_id')->unsigned();
            //$table->foreign('category_id')->references('id')->on('categories');
            //$table->integer('img_id')->unsigned();
            //$table->foreign('img_id')->references('id')->on('images');
            //$table->timestamps();
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
