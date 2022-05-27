<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMecanicosTable extends Migration
{
    public function up()
    {
        Schema::create('mecanicos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data_admissao');
            $table->decimal('salario', 10, 2);
            $table->integer('pessoa')->unsigned();
            $table->foreign('pessoa')->references('id')->on('pessoas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mecanicos');
    }
}
