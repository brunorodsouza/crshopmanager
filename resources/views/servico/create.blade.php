@extends('layout.nav')

@section('conteudo')
    <div class="container my-4">
        <h2 style="margin-bottom:15px; padding-top:15px;"> Novo Serviço </h2>

        <form action='{{route('servico.store')}}' method="POST">
            @csrf
            <p class="text-center bg-info text-white fw-bold">Dados Serviços</p>

            <div class="form-group row">
                <div class="col-md-9">
                    <label class="form-label" for="titulo">Título: </label>
                    <input type="text" class="form-control" id="titulo" name="titulo">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="valor">Valor: </label>
                    <input type="text" class="form-control" id="valor" name ="valor">
                </div>
            </div>

            <div class="mt-4 text-end">
                <button type ="submit "class="btn btn-success">Cadastrar</button>
                <a href="{{route('servico')}}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
