@extends('home.home')

@section('conteudo')
<div class="container my-4">
    <div style=" margin-bottom: 15px; padding-top:15px; display:flex; justify-content:space-between;; align-items:center">
        <h2>Lista de Veículos</h2>
        <a href='{{route('veiculo.novo')}}' class='btn btn-success' style="height: 40px;">Cadastrar</a>
    </div>
    <?php

    if (!empty($dados)){
        echo"<table class='table table-striped table-hover'>";
        echo"<thead class='bg-secondary text-white'>
                <td>Cliente</td>
                <td>Código</td>
                <td>Modelo</td>
                <td>Marca</td>
                <td>Placa</td>
                <td>Ações</td>
             </thead>";

        foreach($dados as $dado){

            $linkReadMore = url('/veiculo/' . $dado->id);
            $linkEditItem = url ('/veiculo/editar/' . $dado->id);
            $linkRemoveItem = url ('/veiculo/remover/' . $dado->id);
            echo"<tr>
                    <td>{$dado->pessoa->nome}</td>
                    <td>$dado->codigo</td>
                    <td>$dado->modelo</td>
                    <td>$dado->marca</td>
                    <td>$dado->placa</td>
                    <td><a href='{$linkReadMore}'>Ver Mais</a> | <a href='{$linkEditItem}'>Editar</a> | <a href='{$linkRemoveItem}'>Excluir</a></td>
                 </tr>";
        }
        echo"</table>";
    }
    ?>
    </div>
@endsection
