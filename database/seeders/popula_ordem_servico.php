<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class popula_ordem_servico extends Seeder
{
    public function run()
    {

        $servicoId = DB::statement('SELECT TOP 1 id FROM servico ');
        $veiculoId = DB::statement('SELECT TOP 1 id FROM veiculo ');
        $pessoaId = DB::statement('SELECT TOP 1 id FROM pessoa ');
        $materialId = DB::statement('SELECT TOP 1 id FROM material ');


        DB::table('ordem_servico')->insert([
            'data_inicio' => '2022-06-12',
            'data_previsao' => '2022-06-12',
            'data_fim' => '2022-06-13',
            'valor_total_material' => '70.00',
            'valor_servico' => '270.00',
            'valor_pago' => '270.00',
            'pessoa' => $pessoaId,
            'veiculo' => $veiculoId,
            'servico' => $servicoId,
            'material' => $materialId,
            'status_pagamento' => 1,
        ]);
    }
}