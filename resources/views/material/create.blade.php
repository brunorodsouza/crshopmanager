@extends('home.home')

@section('conteudo')
<div class="container my-4">
    <h2 style="margin-bottom: 15px; padding-top:15px;"> Novo Material </h2>

    <form action='{{route('material.store')}}' method="POST">
        @csrf
        <p class="text-center bg-secondary text-white fw-bold">Dados Materiais</p>

        <div class="form-group row">
            <div class="col-md-4">
                <label class="form-label" for="titulo">Título: </label>
                <input type="text" class="form-control" id="titulo" name="titulo">
            </div>
            <div class="col-md-2">
                <label class="form-label" for="codigo">Código: </label>
                <input type="text" class="form-control" id="codigo" name="codigo">
            </div>
            <div class="col-md-2">
                <label class="form-label" for="valor">Valor: </label>
                <input type="text" class="form-control" id="valor" name ="valor">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="descricao">Descrição: </label>
                <input type="text" class="form-control" id="descricao" name="descricao">
            </div>
        </div>

        <div class="mt-4 text-end">
            <button type ="submit "class="btn btn-success">Cadastrar</button>

    </form>
    <a href="{{route('material')}}" class="btn btn-secondary">Cancelar</a>
</div>
</div>
@endsection
