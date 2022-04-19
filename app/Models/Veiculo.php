<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    private Cliente $cliente;
    private $codigo;
    private $modelo;
    private $marca;
    private $ano_fab;
    private $ano_mod;
    private $combustivel;
    private $placa;
    use HasFactory;
}
