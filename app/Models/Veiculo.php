<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    //private Cliente $cliente;
    //private $codigo;
    //private $modelo;
    //private $marca;
    //private $cor;
    //private $ano_fab;
    //private $ano_mod;
    //private $combustivel;
    //private $placa;

    protected $table = 'veiculo';

    protected $fillable = [
        'id_pessoa',
        'codigo',
        'modelo',
        'marca',
        'cor',
        'ano_fab',
        'ano_mod',
        'combustivel',
        'placa',

    ];

    public function Pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'id_pessoa', 'id');
    }

    use HasFactory;
}
