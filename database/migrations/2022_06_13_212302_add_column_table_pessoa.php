<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnTablePessoa extends Migration
{
    public function up()
    {
      Schema::table('pessoa', function($table){
          $table->integer('tipoStatus')->nullable();
      });
    }

    public function down()
    {
        Schema::table('pessoa', function($table) {
            $table->dropColumn('tipoStatus');
        });
    }
}
