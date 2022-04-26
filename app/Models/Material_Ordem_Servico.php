<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Type\Decimal;

class Material_Ordem_Servico extends Model
{
    private Material $material;
    private Ordem_Servico $ordem_servico;
    private $qnt_material;
    private Decimal $valor_material;
    use HasFactory;
}
