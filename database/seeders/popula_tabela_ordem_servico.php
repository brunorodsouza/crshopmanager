<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class popula_tabela_ordem_servico extends Seeder
{
    public function run()
    {
        $servicoId = DB::statement('SELECT TOP 1 id FROM servico ');
        $veiculoId = DB::statement('SELECT TOP 1 id FROM veiculo ');
        $pessoaId = DB::statement('SELECT TOP 1 id FROM pessoas ');
        
        
        DB::table('ordem_servico')->insert([
            
            'data_inicio' => '2022-06-12',
            'data_previsao' => '2022-06-12',
            'data_fim' => '2022-06-13',
            'valor_total_material' => '70.00',
            'valor_servico' => '270.00',
            'valor_pago' => '270.00',
            
            'id_pessoa' => '3',
            'id_veiculo' => '1',
            'id_servico' => '3',
            
            'status_pagamento' => 1,
        ]);
    }
}
