<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicoTable extends Migration
{
    public function up()
    {
        Schema::create('servico', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->decimal('valor');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('servico');
    }
}
