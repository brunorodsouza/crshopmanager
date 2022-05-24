<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Cliente extends Pessoa
{
    // private Date $data_cadastro;
    // Data de criação já cria automaticamente para todos os usuarios na tabela pessoas
    use HasFactory;
}
