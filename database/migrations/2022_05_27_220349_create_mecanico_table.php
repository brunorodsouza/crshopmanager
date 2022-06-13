<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMecanicoTable extends Migration
{
    public function up()
    {
        Schema::create('mecanico', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data_admissao');
            $table->decimal('salario', 10, 2);
            $table->integer('pessoa')->unsigned();
            $table->foreign('pessoa')->references('id')->on('pessoa');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mecanico');
    }
}
