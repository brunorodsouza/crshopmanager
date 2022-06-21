<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class popula_material extends Seeder
{
    public function run()
    {
        DB::table('material')->insert([
            'titulo' => 'Luz de Freio',
            'valor' => '100',
            'descricao' => 'Luz para o freio de carros em geral',
        ]);
    }
}
