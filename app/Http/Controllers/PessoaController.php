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
        $dado = Pessoa::where('id',$id)->get();
        if(!empty($dado)){
            return view('pessoa.edit')->with('dado',$dado);
        } else {
            return redirect()->route('pessoa');
        }
    }

    public function update(Request $request, $id)
    {
        $dado = Pessoa::find($id);

        $dado->nome = $request->nome;
        $dado->matricula = $request->matricula;
        $dado->cpf = $request->cpf;
        $dado->email = $request-> email;
        $dado->data_nascimento = $request->data_nascimento;
        $dado->telefone = $request->telefone;
        $dado->celular = $request->celular;
        $dado->cep = $request->cep;
        $dado->uf = $request->uf;
        $dado->cidade = $request->cidade;
        $dado->bairro = $request->bairro;
        $dado->logradouro = $request->logradouro;
        $dado->numero = $request->numero;
        $dado->complemento = $request->complemento;

        $dado->save();
        return redirect()->route('pessoa');

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
