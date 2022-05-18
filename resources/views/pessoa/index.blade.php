@extends('layout2')

@section('conteudo')
<div class="container my-4">
    <h1> Pessoas que frequentam o bar do frances </h1>

    <?php
    if (!empty($dados)){
        echo"<table class='table table-striped table-hover'>";
        echo"<thead class='bg-primary text-white'>
                <td>Nome</td>
                <td>Matrícula</td>
                <td>CPF</td>
                <td>Ações</td>
            </thead>";

        foreach($dados as $dado){
            $linkReadMore = url('/pessoa/' . $dado->name);
            $linkEditItem = url ('/pessoa/editar/' . $dado->name);
            $linkRemoveItem = url ('/pessoa/remover/' . $dado->name);
            echo"<tr>;
                 <td>$dado->nome</td>
                 <td>$dado->matricula</td>
                 <td>$dado->cpf</td>
                 <td>$dado->email</td>
                  </tr>";
        }
        echo"</table>";
    }
    ?>
    </div>

@endsection
