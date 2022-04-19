<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    private $codigo;
    private $titulo;
    private $valor;
    use HasFactory;
}
