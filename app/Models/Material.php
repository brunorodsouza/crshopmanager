<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    //private $codigo;
    //private $titulo;
    //private $valor;
    //private $descricao;
    //use HasFactory;

    protected $table = 'material';

    protected $fillable = [
        'codigo',
        'titulo',
        'valor',
        'descricao'

    ];
}
