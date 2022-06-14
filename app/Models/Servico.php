<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $table = 'servico';

    protected $fillable = [
        'codigo',
        'titulo',
        'valor',
    ];

    
    
    use HasFactory;
}
