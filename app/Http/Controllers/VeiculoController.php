<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use App\Models\Pessoa;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function index()
    {
        $dados = Veiculo::with('pessoas')->get();
        return view('veiculo.index')->with('dados', $dados);
    }

    public function show($id)
    {
        $dado = Veiculo::where('id', $id)->with('pessoas')->get();

        if (!empty($dado)) {
            return view('veiculo.show')->with('dado', $dado);
        } else {
            return redirect()->route('veiculo');
        }
    }

    public function create()
    {
        $dados = Pessoa::get();

        if (!empty($dados)) {
            return view('veiculo.create')->with('dados', $dados);
        } else {
            return redirect()->route('veiculo');
        }
    }

    public function store(Request $request)
    {
        $dados = $request->all();
        Veiculo::create($dados);
        return redirect()->route('veiculo');
    }

    public function edit($id)
    {
        $dado = Veiculo::where('id',$id)->with('pessoas')->get()->first();

        if(!empty($dado)){
            return view('veiculo.edit')->with('dado',$dado);
        } else {
            return redirect()->route('veiculo');
        }
    }

    public function update(Request $request, $id)
    {
        $dado = Veiculo::find($id);

        $dado->modelo = $request->modelo;
        $dado->marca = $request->marca;
        $dado->cor = $request->cor;
        $dado->ano_fab = $request->ano_fab;
        $dado->ano_mod = $request->ano_mod;
        $dado->combustivel = $request->combustivel;
        $dado->placa = $request->placa;

        $dado->save();
        return redirect()->route('veiculo');
    }

    public function destroy($id)
    {
        $dado = Veiculo::where('id', $id)->get();
        if (!empty($dado)) {
            DB::delete('DELETE FROM ordem_servico WHERE veiculo = ?', [$id]);
            DB::delete('DELETE FROM veiculo WHERE id = ?', [$id]);
        }
        return redirect()->route('veiculo');
    }
}
