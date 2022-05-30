<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColunaTabelaPessoa extends Migration
{
    public function up()
    {
      Schema::table('pessoas', function($table){
          $table->integer('tipoStatus')->nullable();
      });
    }

    public function down()
    {
        Schema::table('pessoas', function($table) {
            $table->dropColumn('tipoStatus');
        });
    }
}
