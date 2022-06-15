<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(popula_pessoa::class);
        $this->call(popula_material::class);
        $this->call(popula_servico::class);
        $this->call(popula_veiculo::class);
        $this->call(popula_ordem_servico::class);
    }
}
