@extends('layout.nav')

@section('conteudo')
    <div class="container my-4">
        <h2 style="margin-bottom: 15px; padding-top:15px;"> Editar Material </h2>

        <?php
        $dado = $dado[0];
        ?>

        <form  action="<?= url('/material/update',['id' => $dado->id]);?>" method="post">
            <?= csrf_field(); ?>
            <?= method_field('PUT');?>
            <p class="text-center bg-secondary text-white fw-bold">Dados Material</p>

            <div class="form-group row">
                <div class="col-md-5">
                    <label class="form-label" for="titulo">Título: </label>
                    <input type="text" class="form-control" id="titulo" name="titulo" value="{{$dado->titulo}}">
                </div>
                <div class="col-md-2">
                    <label class="form-label" for="valor">Valor: </label>
                    <input type="text" class="form-control" id="valor" name="valor" value="{{$dado->valor}}">
                </div>
                <div class="col-md-5">
                    <label class="form-label" for="descricao">Descrição: </label>
                    <input type="text" class="form-control" id="descricao" name="descricao" value="{{$dado->descricao}}">
                </div>
            </div>

            <div class="mt-4 text-left">
                <button type="submit" class="btn btn-success text-white">Salvar</button>
                <a href="{{route('material')}}" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
@endsection
