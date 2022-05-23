<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    //private $codigo;
    //private $titulo;
    //private Decimal $valor;
    //use HasFactory;

    protected $table = 'servico';

    protected $fillable = [
        'codigo',
        'titulo',
        'valor',
    ];

    use HasFactory;
}
