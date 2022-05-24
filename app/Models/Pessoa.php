<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Pessoa extends Model
{
    // private $matricula;
    // private $cpf;
    // private $nome;
    // private Date $data_nascimento;
    // private $telefone;
    // private $celular;
    // private $email;
    // private $cep;
    // private $bairro;
    // private $logradouro;
    // private $numero;
    // private $complemento;
    // private $cidade;
    // private $uf;

    protected $table = 'pessoas';

    protected $fillable = [
        'nome',
        'matricula',
        'cpf',
        'email',
        'data_nascimento',
        'telefone',
        'celular',
        'cep',
        'uf',
        'cidade',
        'bairro',
        'logradouro',
        'numero',
        'complemento',
        'tipoStatus',
    ];

    use HasFactory;
}
