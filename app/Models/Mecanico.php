<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Ramsey\Uuid\Type\Decimal;

class Mecanico extends Pessoa
{

    protected $table = 'mecanico';

    protected $fillable = [
        'data_admissao',
        'salario',
        // 'senha_admin',
        'pessoa',
    ];

    use HasFactory;
}
