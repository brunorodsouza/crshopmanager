<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Pessoa;
use App\Models\Servico;
use App\Models\Veiculo;
use App\Models\Material;

class popula_ordem_servico extends Seeder
{
    public function run()
    {
        $pessoaId = Pessoa::orderBy('id')->first();
        $servicoId = Servico::orderBy('id')->first();
        $veiculoId = Veiculo::orderBy('id')->first();
        $materialId = Material::orderBy('id')->first();

        DB::table('ordem_servico')->insert([
            'data_inicio' => '2022-06-12',
            'data_previsao' => '2022-06-12',
            'data_fim' => '2022-06-13',
            'valor_total_material' => '70.00',
            'valor_servico' => '270.00',
            'valor_pago' => '270.00',
            'pessoa' => $pessoaId['id'],
            'servico' => $servicoId['id'],
            'veiculo' => $veiculoId['id'],
            'material' => $materialId['id'],
            'status_pagamento' => 1,
        ]);
    }
}
