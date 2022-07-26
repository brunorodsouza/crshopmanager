<?php

namespace App\Http\Controllers;

use App\Models\Ordem_Servico;
use App\Models\Veiculo;
use App\Models\Pessoa;
use App\Models\Servico;
use App\Models\Material;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrdemServicoController extends Controller
{
    public function index()
    {
        $dados = Ordem_Servico::with('pessoas','veiculos')->get();
        // dd($dados);
        return view('ordem_servico.index')->with('dados', $dados);
    }

    public function boleto($id)
    {
        $dado = DB::select('exec GERAR_BOLETO @VEICULO_ID = ?', [$id]);
        return $dado;
    }

    public function show($id)
    {
        $dados = Ordem_Servico::where('id', $id)->with('pessoas','veiculos','servicos','materiais')->get();

        if (!empty($dados)) {
            return view('ordem_servico.show')->with('dados', $dados);
        } else {
            return redirect()->route('ordem_servico');
        }
    }

    public function create()
    {
        $dados['pessoa'] = Pessoa::all();
        $dados['veiculo'] = Veiculo::all();
        $dados['ordem'] = Ordem_Servico::all();
        $dados['servico'] = Servico::all();
        $dados['material'] = Material::all();

        if (!empty($dados)) {
            return view('ordem_servico.create',['dados'=>$dados]);
        }
        else {
            return redirect()->route('ordem_servico');
        }
    }

    public function store(Request $request)
    {
        $dados = $request->all();

        $valorMaterial = floatval(Material::findOrFail($dados['material'])->valor);
        $valorServico = floatval(Servico::findOrFail($dados['servico'])->valor);
        $valorPago = $valorMaterial + $valorServico;
        Ordem_Servico::create([
            "pessoa" => $dados['pessoa'],
            "servico" => $dados['servico'],
            "material" => $dados['material'],
            "veiculo" => $dados['veiculo'],
            "data_inicio" => $dados['data_inicio'],
            "data_previsao" => $dados['data_previsao'],
            "data_fim" => $dados['data_fim'],
            "status_pagamento" => $dados['status_pagamento'],
            "valor_total_material" => $valorMaterial,
            "valor_servico" => $valorServico,
            "valor_pago" => $valorPago
        ]);
        return redirect()->route('ordem_servico');
    }

    public function edit($id)
    {
        $dados = Ordem_Servico::where('id',$id)->with('pessoas','veiculos','servicos','materiais')->get()->first();

        if(!empty($dados)){
            return view('ordem_servico.edit')->with('dados',$dados);
        } else {
            return redirect()->route('ordem_servico');
        }
    }

    public function update(Request $request, $id)
    {
        $dados = Ordem_Servico::find($id);

        $dados->data_inicio = $request->data_inicio;
        $dados->data_previsao = $request->data_previsao;
        $dados->data_fim = $request->data_fim;
        // $dados->valor_pago = $request->valor_pago;
        $dados->status_pagamento = $request->status_pagamento;

        $dados->save();
        return redirect()->route('ordem_servico');
    }

    public function destroy($id)
    {
        $dado = Ordem_Servico::where('id', $id)->get();
        if (!empty($dado)) {
            DB::delete('DELETE FROM ordem_servico WHERE id = ?', [$id]);
        }
        return redirect()->route('ordem_servico');
    }
}
