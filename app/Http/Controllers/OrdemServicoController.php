<?php

namespace App\Http\Controllers;

use App\Models\Ordem_Servico;
use App\Models\Veiculo;
use App\Models\Pessoa;
use App\Models\Servico;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class OrdemServicoController extends Controller
{
    public function index()
    {
        
        $dados = Ordem_Servico::with('pessoa','veiculo','servico')->get();
        
        return view('ordem_servico.index')->with('dados', $dados);
        
    
    
    }


    public function show($id)
    {
        $dado = Ordem_Servico::where('id', $id)->with('pessoa','veiculo','servico')->get();

        if (!empty($dado)) {
            return view('ordem_servico.show')->with('dado', $dado);
        } else {
            return redirect()->route('ordem_servico');
        }
    }

    public function create()
    {
        
        $dados['pessoa']=Pessoa::all();
        $dados['veiculo']=Veiculo::all();
        $dados['servico']=Servico::all();
        
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
        Ordem_Servico::create($dados);
        return redirect()->route('ordem_servico');
    }

    public function edit($id)
    {
        $dados = Ordem_Servico::where('id',$id)->with('pessoa','veiculo','servico')->get();

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
        $dados->valor_total_material = $request->valor_total_material;
        $dados->valor_servico = $request->valor_servico;
        $dados->valor_pago = $request->valor_pago;
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
