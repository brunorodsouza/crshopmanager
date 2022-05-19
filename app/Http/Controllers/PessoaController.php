<?php

namespace App\Http\Controllers;


use App\Models\Pessoa;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index()
    {
        $dados = Pessoa::all();
        return view('pessoa.index')->with('dados', $dados);
    }

    public function show($id)
    {
        $dado = Pessoa::where('id', $id)->get();
        if (!empty($dado)) {
            return view('pessoa.show')->with('dado', $dado);
        } else {
            return redirect()->route('pessoa');
        }
    }

    public function create()
    {
        return view('pessoa.create');
    }

    public function store(Request $request)
    {
        $dados = $request->all();
        // $dado = [
        //     'nome' => $request-> nome,
        //     'matricula' => $request-> matricula,
        //     'cpf' => $request-> cpf,
        //     'email' => $request-> email,
        //     'data_nascimento' => $request-> data_nascimento,
        //     'telefone' => $request-> telefone,
        //     'celular' => $request-> celular,
        //     'cep' => $request-> cep,
        //     'uf' => $request-> uf,
        //     'cidade' => $request-> cidade,
        //     'bairro' => $request-> bairro,
        //     'logradouro' => $request-> logradouro,
        //     'numero' => $request-> numero,
        //     'complemento' => $request-> complemento,
        // ];
        Pessoa::create($dados);
        return redirect()->route('pessoa');
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $dado = Pessoa::where('id', $id)->get();
        if (!empty($dado)) {
            DB::delete('DELETE FROM pessoas WHERE id = ?', [$id]);
        }
        return redirect()->route('pessoa');
    }
}
