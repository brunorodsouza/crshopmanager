@extends('home.home')

@section('conteudo')

<div class="container  my-4">
<?php

    if(!empty($dado)){
        foreach ($dado as $d) {
              ?>
            <h2 class="fw-bold text-uppercase" style="margin-bottom: 15px; padding-top:15px;"><?= $d -> nome; ?></h2>

            <form>
                <p class="text-center bg-secondary text-white fw-bold">Dados Cadastrais</p>

                <div class="form-group row">
                    <div class="col-md-4">
                        <label class="form-label" for="cpf">CPF: </label>
                        <input type="text" class="form-control" id="cpf" value="<?= $d -> cpf ?>" disabled>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="matricula">Matrícula: </label>
                        <input type="text" class="form-control" id="matricula" value="<?= $d -> matricula ?>" disabled>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="data_nascimento">Data Nascimento: </label>
                        <input type="text" class="form-control" id="data_nascimento" value="<?= $d -> data_nascimento ?>" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-4">
                        <label class="form-label" for="telefone">Telefone: </label>
                        <input type="text" class="form-control" id="telefone" value="<?= $d -> telefone ?>" disabled>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="celular">Celular: </label>
                        <input type="text" class="form-control" id="celular" value="<?= $d -> celular ?>" disabled>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="email">Email: </label>
                        <input type="text" class="form-control" id="email" value="<?= $d -> email ?>" disabled>
                    </div>
                </div>

                <p class="text-center bg-secondary text-white fw-bold">Dados Residênciais</p>

                <div class="form-group row">
                    <div class="col-md-2">
                        <label class="form-label" for="cep">CEP: </label>
                        <input type="text" class="form-control" id="cep" value="<?= $d -> cep ?>" disabled>
                    </div>
                    <div class="col-md-1">
                        <label class="form-label" for="uf">UF: </label>
                        <input type="text" class="form-control" id="uf" value="<?= $d -> uf ?>" disabled>
                    </div>
                    <div class="col-md-5">
                        <label class="form-label" for="cidade">Cidade: </label>
                        <input type="text" class="form-control" id="cidade" value="<?= $d -> cidade ?>" disabled>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="bairro">Bairro: </label>
                        <input type="text" class="form-control" id="bairro" value="<?= $d -> bairro ?>" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="form-label" for="cep">Logradouro: </label>
                        <input type="text" class="form-control" id="cep" value="<?= $d -> logradouro ?>" disabled>
                    </div>
                    <div class="col-md-1">
                        <label class="form-label" for="numero">Nº: </label>
                        <input type="text" class="form-control" id="numero" value="<?= $d -> numero ?>" disabled>
                    </div>
                    <div class="col-md-5">
                        <label class="form-label" for="complemento">Complemento: </label>
                        <input type="text" class="form-control" id="complemento" value="<?= $d -> complemento ?>" disabled>
                    </div>
                </div>

                <div class="mt-4 text-left">
                    <a href="{{route('pessoa')}}" class="btn btn-secondary">Voltar</a>
                </div>
            </form>

            <?php
        }

    }
    ?>
</div>
@endsection

