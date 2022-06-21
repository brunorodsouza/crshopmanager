<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculoTable extends Migration
{
    public function up()
    {
        Schema::create('veiculo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('modelo');
            $table->string('marca');
            $table->string('cor');
            $table->string('ano_fab');
            $table->string('ano_mod');
            $table->string('combustivel');
            $table->string('placa');
            $table->integer('pessoa')->unsigned();
            $table->foreign('pessoa')->references('id')->on('pessoa')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('veiculo');
    }
}
