<?php

namespace App\Http\Controllers;

use App\Models\Ordem_Servico;
use App\Models\Pessoa;
use App\Models\Mecanico;
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

        DB::beginTransaction();

        $pessoa = Pessoa::create($dados);

        if($request->tipoStatus == '2'){
        Mecanico::create([
            "pessoa" => $pessoa->id,
            'salario' => $request->salario,
            'data_admissao' => $request->data_admissao
        ]);
    }

        DB::commit();
        return redirect()->route('pessoa');
    }


    public function edit($id)
    {
        $dado = Pessoa::where('id',$id)->with('mecanicos')->get();

        if(!empty($dado)){
            return view('pessoa.edit')->with('dado',$dado);
        } else {
            return redirect()->route('pessoa');
        }
    }

    public function update(Request $request, $id)
    {
        $dado = Pessoa::where('id',$id)->with('mecanicos')->get();

        $dado = $dado[0];

        $dado->nome = $request->nome;
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
        $dado->tipoStatus = $request->tipoStatus;
        // update do mecanico
        $dado->mecanicos->data_admissao = $request->data_admissao;
        $dado->mecanicos->salario = $request->salario;

        $dado->push();

        return redirect()->route('pessoa');
    }

    public function destroy($id)
    {
        DB::beginTransaction();

        $dado = Pessoa::where('id', $id)->get();

        if ($dado->tipoStatus = 2){
            DB::delete('DELETE FROM mecanico WHERE pessoa = ?', [$id]);
        }

        if (!empty($dado)) {
            DB::delete('DELETE FROM pessoa WHERE id = ?', [$id]);
        }

        DB::commit();
        return redirect()->route('pessoa');
    }
}
