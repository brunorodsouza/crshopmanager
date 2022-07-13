@extends('layout.nav')

@section('conteudo')
    <div class="container my-4">
        <h2 style="margin-bottom: 15px; padding-top:15px;"> Editar Servico </h2>

        <form  action="<?= url('/servico/update',['id' => $dado->id]);?>" method="post">
            @csrf
            @method('PUT')

            <p class="text-center bg-secondary text-white fw-bold">Dados Serviço</p>

            <div class="form-group row">
                <div class="col-md-9">
                    <label class="form-label" for="titulo">Título: </label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{$dado->titulo}}">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="valor">Valor: </label>
                    <input type="text" class="form-control" id="valor" name="valor" value="{{$dado->valor}}">
                </div>
            </div>

            <div class="mt-4 text-left">
                <button type="submit" class="btn btn-success text-white">Salvar</button>
                <a href="{{route('servico')}}" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
@endsection
