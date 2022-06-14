<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class popula_ordem_servico extends Seeder
{
    public function run()
    {
<<<<<<< HEAD:database/seeders/popula_tabela_ordem_servico.php
        //$servicoId = DB::statement('SELECT TOP 1 id FROM servico ');
        //$veiculoId = DB::statement('SELECT TOP 1 id FROM veiculo ');
        //$pessoaId = DB::statement('SELECT TOP 1 id FROM pessoas ');
=======
        $servicoId = DB::statement('SELECT TOP 1 id FROM servico ');
        $veiculoId = DB::statement('SELECT TOP 1 id FROM veiculo ');
        $pessoaId = DB::statement('SELECT TOP 1 id FROM pessoa ');
>>>>>>> e709a7f4d473024922245b487e6bc1181b75d735:database/seeders/popula_ordem_servico.php

        DB::table('ordem_servico')->insert([
            'data_inicio' => '2022-06-12',
            'data_previsao' => '2022-06-12',
            'data_fim' => '2022-06-13',
            'valor_total_material' => '70.00',
            'valor_servico' => '270.00',
            'valor_pago' => '270.00',
<<<<<<< HEAD:database/seeders/popula_tabela_ordem_servico.php
            'id_pessoa' => '3',
            'id_veiculo' => '1',
            'id_servico' => '3',
            'id_material' => '8',
=======
            'id_pessoa' => $pessoaId,
            'id_veiculo' => $veiculoId,
            'id_servico' => $servicoId,
>>>>>>> e709a7f4d473024922245b487e6bc1181b75d735:database/seeders/popula_ordem_servico.php
            'status_pagamento' => 1,
        ]);
    }
}
