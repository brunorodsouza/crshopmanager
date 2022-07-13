@extends('home.home')

@section('conteudo')
<div class="container my-4">
    <div style=" margin-bottom: 15px; padding-top:15px; display:flex; justify-content:space-between;; align-items:center">
        <h2>Lista de Materiais</h2>
        <a href='{{route('material.novo')}}' class='btn btn-success' style="height: 40px;">Cadastrar</a>
    </div>
    <?php
    if (!empty($dados)){
        echo"<table class='table table-striped table-hover'>";
        echo"<thead class='bg-secondary text-white'>
                <td>Titulo</td>
                <td>Valor</td>
                <td>Descrição</td>
                <td>Ações</td>
            </thead>";

        foreach($dados as $dado){
            $linkReadMore = url('/material/' . $dado->id);
            $linkEditItem = url ('/material/editar/' . $dado->id);
            $linkRemoveItem = url ('/material/remover/' . $dado->id);
            echo"<tr>
                    <td>$dado->titulo</td>
                    <td>$dado->valor</td>
                    <td>$dado->descricao</td>
                    <td><a href='{$linkReadMore}'>Ver Mais</a> | <a href='{$linkEditItem}'>Editar</a> | <a href='{$linkRemoveItem}'>Excluir</a></td>
                 </tr>";
        }
        echo"</table>";
    }
    ?>
    </div>
@endsection
