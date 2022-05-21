<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class popula_tabela_material extends Seeder
{
    public function run()
    {
        DB::table('material')->insert([
            'codigo' => 'L2',
            'titulo' => 'Luz de Freio',
            'valor' => '100',
            'descricao' => 'Luz para o freio de carros em geral',
        ]);
    }
}
