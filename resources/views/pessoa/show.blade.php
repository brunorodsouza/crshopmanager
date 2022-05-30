@extends('home.home')

@section('conteudo')

<div class="container  my-4">
    <?php

        if(!empty($dado)){
            foreach ($dado as $d) {
                if($d->tipoStatus == 1){
                    $d->tipoStatus = "Cliente";
                };
                if($d->tipoStatus == 2){
                    $d->tipoStatus = "Funcionário";
                };
    ?>

            <div class="d-flex">
                <h2 class="fw-bold text-uppercase" style="margin-bottom: 15px; padding-top:15px;"><?=$d->nome;?></h2>
                <h2 class="fw-bold text-uppercase" style="margin-bottom: 15px; padding-top:15px;">&nbsp&nbsp-&nbsp&nbsp<?=$d->tipoStatus;?></h2>
            </div>

            <form>
                <p class="text-center bg-secondary text-white fw-bold">Dados Cadastrais</p>

                <div class="form-group row">
                    <div class="col-md-4">
                        <label class="form-label" for="cpf">CPF: </label>
                        <input type="text" class="form-control" id="cpf" value="<?=$d->cpf?>" disabled>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="matricula">Matrícula: </label>
                        <input type="text" class="form-control" id="matricula" value="<?=$d->matricula?>" disabled>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="data_nascimento">Data Nascimento: </label>
                        <input type="text" class="form-control" id="data_nascimento" value="<?=$d->data_nascimento?>" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-4">
                        <label class="form-label" for="telefone">Telefone: </label>
                        <input type="text" class="form-control" id="telefone" value="<?=$d->telefone?>" disabled>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="celular">Celular: </label>
                        <input type="text" class="form-control" id="celular" value="<?=$d->celular?>" disabled>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="email">Email: </label>
                        <input type="text" class="form-control" id="email" value="<?=$d->email?>" disabled>
                    </div>
                </div>

                <p class="text-center bg-secondary text-white fw-bold">Dados Residênciais</p>

                <div class="form-group row">
                    <div class="col-md-2">
                        <label class="form-label" for="cep">CEP: </label>
                        <input type="text" class="form-control" id="cep" value="<?=$d->cep ?>" disabled>
                    </div>
                    <div class="col-md-1">
                        <label class="form-label" for="uf">UF: </label>
                        <input type="text" class="form-control" id="uf" value="<?= $d->uf?>" disabled>
                    </div>
                    <div class="col-md-5">
                        <label class="form-label" for="cidade">Cidade: </label>
                        <input type="text" class="form-control" id="cidade" value="<?=$d->cidade?>" disabled>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="bairro">Bairro: </label>
                        <input type="text" class="form-control" id="bairro" value="<?=$d->bairro?>" disabled>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="form-label" for="cep">Logradouro: </label>
                        <input type="text" class="form-control" id="cep" value="<?=$d->logradouro?>" disabled>
                    </div>
                    <div class="col-md-1">
                        <label class="form-label" for="numero">Nº: </label>
                        <input type="text" class="form-control" id="numero" value="<?=$d->numero?>" disabled>
                    </div>
                    <div class="col-md-5">
                        <label class="form-label" for="complemento">Complemento: </label>
                        <input type="text" class="form-control" id="complemento" value="<?=$d->complemento?>" disabled>
                    </div>
                </div>

                @if ($d->tipoStatus == "Funcionário")
                <div class="mecanicos" id="mecanico">
                    <p class="text-center bg-secondary text-white fw-bold">Informações do Mecânico</p>

                    <div class="form-group row ">
                        <div class="col-md-3">
                            <label class="form-label" for="cep">Data de Admissão:</label>
                            <input type="date" class="form-control" id="data_admissao" name="data_admissao" value="<?=$d->mecanicos->data_admissao?>" disabled>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="uf">Salário:</label>
                            <input type="text" class="form-control" id ="salario" name="salario" value="<?=$d->mecanicos->salario?>" disabled>
                        </div>
                    </div>
                </div>
                @endif

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


@section('scripts')
    <script type="text/javascript" src='{{asset('/static/js/pessoa.js')}}'></script>
@endsection

