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
        'id_servico',
        'id_veiculo',
        'id_pessoa',
        'data_inicio',
        'data_previsao',
        'data_fim',
        'valor_total_material',
        'valor_servico',
        'valor_pago',
        'status_pagamento',
        
    ];
    
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class, 'id_pessoa', 'id');
    }

    public function veiculo()
    {
        return $this->belongsTo(Veiculo::class, 'id_veiculo', 'id');
    }

    public function servico()
    {
        return $this->belongsTo(Servico::class, 'id_servico', 'id');
    }

    
    use HasFactory;
}
