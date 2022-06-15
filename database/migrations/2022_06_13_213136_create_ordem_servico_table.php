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
            //identificação do cliente
            $table->integer('pessoa')->unsigned();
            $table->foreign('pessoa')->references('id')->on('pessoa');
            //identifição do veiculo
            $table->integer('veiculo')->unsigned();
            $table->foreign('veiculo')->references('id')->on('veiculo');
            //identificação do servico
            $table->integer('servico')->unsigned();
            $table->foreign('servico')->references('id')->on('servico');
            $table->boolean('status_pagamento');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ordem_servico');
    }
}
