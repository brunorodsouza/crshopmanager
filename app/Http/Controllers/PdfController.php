<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ordem_Servico;
use App\Http\Controllers\OrdemServicoController;
use PDF;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    public function dadoOS($id)
    {
        return DB::select(
            "select distinct
                'Valores referentes ao veículo de placa ('+ v.placa +'), modelo ('+ v.modelo +') e ano de fabricação ' + v.ano_fab + '.'  as a,
                v.placa,
                p.nome,
                s.titulo,
                s.valor as valorServico,
                os.valor_total_material,
                SUM(s.valor + os.valor_total_material) valorTotal
            from veiculo v
            join ordem_servico os on os.veiculo = v.id
            join pessoa p on p.id = os.pessoa
            join servico s on s.id = os.servico
            where os.id = ?
                and os.status_pagamento = 0
            group by v.placa, v.modelo, v.ano_fab, p.nome, s.titulo, s.valor, os.valor_total_material",[$id]);
    }

    public function geraPDF($id)
    {
        $ordem_servico = $this->dadoOS($id);

        $pdf = PDF::loadView('pdf.boleto', compact('ordem_servico'));

        return $pdf->setPaper('a4')->stream('Boleto.pdf');
    }
}
