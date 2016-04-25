<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProdutosPedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos_pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomeProd');
            $table->double('price');
            $table->integer('quant');
            $table->integer('pedidoID')->unsigned();
            $table->foreign('pedidoID')->references('id')->on('pedidos')->onDelete('cascade');
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
        Schema::drop('produtos_pedidos');
    }
}
