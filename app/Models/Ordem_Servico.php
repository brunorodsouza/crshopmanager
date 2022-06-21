<?php
namespace App\Models;

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

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa', 'id');
    }

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class, 'veiculo', 'id');
    }

    public function servico()
    {
        return $this->belongsTo(Servico::class, 'servico','id');
    }

    public function material()
    {
        return $this->belongsTo(Material::class, 'material','id');
    }

    use HasFactory;
}
