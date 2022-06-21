<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Pessoa;

class popula_veiculo extends Seeder
{
    public function run()
    {
        $pessoaId = Pessoa::orderBy('id')->first();

        DB::table('veiculo')->insert([
            'codigo' => '20181105255',
            'pessoa' => $pessoaId['id'],
            'modelo' => 'Sedan',
            'marca' => '200',
            'cor' => 'azul',
            'ano_fab' => '2015',
            'ano_mod' => '2014',
            'combustivel' => 'gas',
            'placa' => 'ABCD1000',
        ]);
    }
}
