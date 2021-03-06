<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class popula_pessoa extends Seeder
{
    public function run()
    {
        DB::table('pessoa')->insert([
            'cpf' => '12345678901',
            'nome' => 'João da Silva',
            'data_nascimento' => '01/01/2000',
            'telefone' => '11-1111-1111',
            'celular' => '11-1111-1111',
            'email' => 'opaitestatudo@gmail.com',
            'cep' => '11111111',
            'bairro' => 'Centro',
            'logradouro' => 'Rua Teste',
            'numero' => '1',
            'complemento' => 'Apto 1',
            'cidade' => 'São Paulo',
            'uf' => 'SP',
            'tipoStatus' => '1'
        ]);
    }
}
