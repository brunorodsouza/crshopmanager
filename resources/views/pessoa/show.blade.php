@extends('layout2')

@section('conteudo')
EM DESENVOLVIMENTO SHOW BLADE
<div class="container my-4">
<?php

    if(!empty($dado)){
        foreach ($dado as $d) {
              ?>
            <h2>nome da pessoa: <?= $d -> nome; ?></h2>
            <p>matricula do desgraçado: <?= $d -> matricula ?></p>
            <p>matricula do desgraçado: <?= $d -> cpf ?></p>
            <p>matricula do desgraçado: <?= $d -> data_nascimento ?></p>
            <p>matricula do desgraçado: <?= $d -> telefone ?></p>
            <p>matricula do desgraçado: <?= $d -> celular ?></p>
            <p>matricula do desgraçado: <?= $d -> email ?></p>
            <p>matricula do desgraçado: <?= $d -> cep ?></p>
            <p>matricula do desgraçado: <?= $d -> bairro ?></p>
            <p>matricula do desgraçado: <?= $d -> logradouro ?></p>
            <p>matricula do desgraçado: <?= $d -> cep ?></p>
            <p>matricula do desgraçado: <?= $d -> numero ?></p>
            <p>matricula do desgraçado: <?= $d -> complemento ?></p>
            <p>matricula do desgraçado: <?= $d -> cidade ?></p>
            <p>matricula do desgraçado: <?= $d -> uf ?></p>
            <?php
        }
    }
    ?>
</div>
@endsection
