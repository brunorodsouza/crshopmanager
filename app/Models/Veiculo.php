<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $table = 'veiculo';

    protected $fillable = [
        'modelo',
        'marca',
        'cor',
        'ano_fab',
        'ano_mod',
        'combustivel',
        'placa',
        'pessoa',
    ];

    public function pessoas()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa', 'id');
    }

    use HasFactory;
}
