@extends('home.home')

@section('conteudo')

<div class="container  my-4">
<?php

    if(!empty($dado)){
        foreach ($dado as $d) {
              ?>
            <h2 class="fw-bold text-uppercase" style="margin-bottom: 15px; padding-top:15px;"><?= $d -> titulo; ?></h2>

            <form>
                <p class="text-center bg-secondary text-white fw-bold">Dados Serviço</p>

                <div class="form-group row">
                    <div class="col-md-2">
                        <label class="form-label" for="codigo">Código: </label>
                        <input type="text" class="form-control" id="codigo" value="<?= $d -> codigo ?>" disabled>
                    </div>
                    <div class="col-md-2">
                        <label class="form-label" for="valor">Valor: </label>
                        <input type="text" class="form-control" id="valor" value="<?= $d -> valor ?>" disabled>
                    </div>
                </div>

                <div class="mt-4 text-left">
                    <a href="{{route('servico')}}" class="btn btn-secondary">Voltar</a>
                </div>
            </form>

            <?php
        }

    }
    ?>
</div>
@endsection

