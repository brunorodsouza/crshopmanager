<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ordem_Servico;
use App\Http\Controllers\OrdemServicoController;
use PDF;

class PdfController extends Controller
{
    public function geraPDF()
    {
        $ordem_servico = app('App\Http\Controllers\OrdemServicoController')->boleto('1');

        $pdf = PDF::loadView('boleto', compact('ordem_servico'));

        return $pdf->setPaper('a4')->stream('Boleto.pdf');
    }
}
