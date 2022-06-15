<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class popula_servico extends Seeder
{
    public function run()
    {
        DB::table('servico')->insert([
            'titulo' => 'Lanternagem',
            'valor' => '200',
        ]);
    }
}
