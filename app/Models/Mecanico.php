<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Ramsey\Uuid\Type\Decimal;

class Mecanico extends Pessoa
{
    private Date $data_admissao;
    private Decimal $salario;
    private $senha_admin;
    use HasFactory;
}
