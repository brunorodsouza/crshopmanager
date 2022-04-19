<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Ramsey\Uuid\Type\Decimal;

class Ordem_Servico extends Model
{
    private Servico $servico;
    private Veiculo $veiculo;
    private Mecanico $mecanico;
    private $data_inicio;
    private Date $data_previsao;
    private Date $data_fim;
    private Decimal $valor_servico;
    private Decimal $valor_material_servico;
    private Decimal $valor_pago;
    private $status_pagamento;
    use HasFactory;
}
