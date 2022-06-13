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
            $table->integer('id_pessoa')->unsigned();
            $table->foreign('id_pessoa')->references('id')->on('pessoa');
            //identifição do veiculo
            $table->integer('id_veiculo')->unsigned();
            $table->foreign('id_veiculo')->references('id')->on('veiculo');
            //identificação do servico
            $table->integer('id_servico')->unsigned();
            $table->foreign('id_servico')->references('id')->on('servico');
            $table->boolean('status_pagamento');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ordem_servico');
    }
}
