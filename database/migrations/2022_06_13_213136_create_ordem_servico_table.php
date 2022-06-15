<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdemServicoTable extends Migration
{
    public function up()
    {
        Schema::create('ordem_servico', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data_inicio');
            $table->date('data_previsao');
            $table->date('data_fim');
            $table->decimal('valor_total_material');
            $table->decimal('valor_servico');
            $table->decimal('valor_pago');
            $table->integer('pessoa')->unsigned();
            $table->integer('veiculo')->unsigned();
            $table->integer('servico')->unsigned();
            $table->boolean('status_pagamento');
            $table->timestamps();
            $table->foreign('pessoa')->references('id')->on('pessoa');
            $table->foreign('veiculo')->references('id')->on('veiculo');
            $table->foreign('servico')->references('id')->on('servico');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ordem_servico');
    }
}
