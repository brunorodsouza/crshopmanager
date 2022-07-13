<?php
namespace App\Models;

use App\Models\Veiculo;
use App\Models\Pessoa;
use App\Models\Material;
use App\Models\Servico;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use Ramsey\Uuid\Type\Decimal;

class Ordem_Servico extends Model
{
    protected $table = 'ordem_servico';

    protected $fillable = [
        'data_inicio',
        'data_previsao',
        'data_fim',
        'valor_total_material',
        'valor_servico',
        'valor_pago',
        'status_pagamento',
        'servico',
        'material',
        'veiculo',
        'pessoa',
    ];

    public function pessoas()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa', 'id');
    }

    public function veiculos()
    {
        return $this->belongsTo(Veiculo::class, 'veiculo', 'id');
    }

    public function servicos()
    {
        return $this->belongsTo(Servico::class, 'servico','id');
    }

    public function materiais()
    {
        return $this->belongsTo(Material::class, 'material','id');
    }

    use HasFactory;
}
