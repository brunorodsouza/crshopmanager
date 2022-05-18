<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('matricula');
            $table->string('cpf');
            $table->string('nome');
            $table->date('data_nascimento');
            $table->string('telefone');
            $table->string('celular');
            $table->string('email');
            $table->string('cep');
            $table->string('bairro');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('complemento');
            $table->string('cidade');
            $table->string('uf');
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
        Schema::dropIfExists('pessoas');
    }
}

