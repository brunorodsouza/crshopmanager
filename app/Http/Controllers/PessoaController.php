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
        //
    }

    public function store(Request $request)
    {
        //
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
        //
    }
}
