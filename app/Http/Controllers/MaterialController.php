<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        $dados = Material::all();
        return view('material.index')->with('dados', $dados);
    }

    public function show($id)
    {
        $dado = Material::where('id', $id)->get();
        if (!empty($dado)) {
            return view('material.show')->with('dado', $dado);
        } else {
            return redirect()->route('material');
        }
    }

    public function create()
    {
        return view('material.create');
    }

    public function store(Request $request)
    {
        $dados = $request->all();

        Material::create($dados);
        return redirect()->route('material');
    }

    public function edit($id)
    {
        $dado = Material::where('id',$id)->get();
        if(!empty($dado)){
            return view('material.edit')->with('dado',$dado);
        } else {
            return redirect()->route('material');
        }
    }

    public function update(Request $request, $id)
    {
        $dado = Material::find($id);

        $dado->titulo = $request->titulo;
        $dado->valor = $request->valor;
        $dado->descricao = $request->descricao;

        $dado->save();
        return redirect()->route('material');

    }

    public function destroy($id)
    {
        $dado = Material::where('id', $id)->get();
        if (!empty($dado)) {
            DB::delete('DELETE FROM ordem_servico WHERE material = ?', [$id]);
            DB::delete('DELETE FROM material WHERE id = ?', [$id]);
        }
        return redirect()->route('material');
    }
}
