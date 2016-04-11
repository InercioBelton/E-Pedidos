<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reserva extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('reservas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomeCliente');
            $table->string('email');
            $table->string('telefone');
            $table->date('data');
            $table->time('hora');
            $table->integer('nrAcompanhantes');
            $table->string('observacao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reservas');
    }
}
