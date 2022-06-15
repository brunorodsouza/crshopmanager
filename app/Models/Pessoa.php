<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Pessoa extends Model
{
    protected $table = 'pessoa';

    protected $fillable = [
        'nome',
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

    public function mecanicos()
    {
        return $this->hasOne('App\Models\Mecanico', 'pessoa', 'id');
    }

    use HasFactory;
}
