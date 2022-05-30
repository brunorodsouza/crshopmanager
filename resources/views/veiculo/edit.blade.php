@extends('home.home')

@section('conteudo')
<div class="container my-4">
    <h2 style="margin-bottom: 15px; padding-top:15px;"> Editar Veículo </h2>

    <?php
    $dado = $dado[0];
    ?>

<form  action="<?= url('/veiculo/update',['id' => $dado -> id]);?>" method="post">
    <?= csrf_field(); ?>
    <?= method_field('PUT');?>
    <p class="text-center bg-secondary text-white fw-bold">Dados Veículo</p>


    <div class="form-group row">

        <div class="col-md-3">
            <label class="form-label" for="id_pessoa">Selecione o Cliente: </label>
                <input type="text" class="form-control" id="modelo" value="<?=$dado->pessoa->nome?>" disabled>
            </select>
        </div>

        <div class="col-md-2">
            <label class="form-label" for="modelo">Modelo: </label>
            <input type="text" class="form-control" id="modelo" name="modelo" value="<?=$dado->modelo?>">
        </div>

        <div class="col-md-2">
            <label class="form-label" for="codigo">Código: </label>
            <input type="text" class="form-control" id="codigo" name="codigo" value="<?=$dado->codigo?>">
        </div>

        <div class="col-md-3">
            <label class="form-label" for="marca">Marca: </label>
            <input type="text" class="form-control" id="marca" name ="marca" value="<?=$dado->marca?>">
        </div>

        <div class="col-md-2">
            <label class="form-label" for="cor">Cor: </label>
            <input type="text" class="form-control" id="cor" name="cor" value="<?=$dado->cor?>">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-2">
            <label class="form-label" for="ano_fab">Ano Fabricação: </label>
            <input type="text" class="form-control" id="ano_fab" name="ano_fab" value="<?=$dado->ano_fab?>">
        </div>

        <div class="col-md-2">
            <label class="form-label" for="ano_mod">Ano Modelo: </label>
            <input type="text" class="form-control" id="ano_mod" name="ano_mod" value="<?=$dado->ano_mod?>">
        </div>

        <div class="col-md-3">
            <label class="form-label" for="combustivel">Combustivel: </label>
            <input type="text" class="form-control" id="combustivel" name="combustivel" value="<?=$dado->combustivel?>">
        </div>

        <div class="col-md-3">
            <label class="form-label" for="placa">Placa: </label>
            <input type="text" class="form-control" id="placa" name ="placa" value="<?=$dado->placa?>">
        </div>
    </div>


    <div class="mt-4 text-left">
        <button type="submit" class="btn btn-success text-white">Salvar</button>
</form>
    <a href="{{route('veiculo')}}" class="btn btn-secondary">Voltar</a>
    </div>
</div>
@endsection
