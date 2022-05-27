<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Pessoa extends Model
{
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

    public function mecanico()
    {
        return $this->hasOne('App\Models\Mecanico', 'pessoa', 'id');
    }

    use HasFactory;
}
