<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculoTabela extends Migration
{
    public function up()
    {
        Schema::create('veiculo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('modelo');
            $table->string('marca');
            $table->string('cor');
            $table->string('ano_fab');
            $table->string('ano_mod');
            $table->string('combustivel');
            $table->string('placa');
            $table->integer('id_pessoa')->unsigned();
            $table->foreign('id_pessoa')->references('id')->on('pessoas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('veiculo');
    }
}
