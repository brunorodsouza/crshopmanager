@extends('home.home')

@section('conteudo')
<div class="container my-4">
    <div style=" margin-bottom: 15px; padding-top:15px; display:flex; justify-content:space-between;; align-items:center">
        <h2>Lista de Usuários</h2>
        <a href='{{route('pessoa.novo')}}' class='btn btn-success' style="height: 40px;">Cadastrar</a>
    </div>
    <?php


    if (!empty($dados)){
        echo"<table class='table table-striped table-hover'>";
        echo"<thead class='bg-secondary text-white'>
                <td>Nome</td>
                <td>CPF</td>
                <td>Email</td>
                <td>Tipo de Usuário</td>
                <td>Ações</td>
            </thead>";

        foreach($dados as $dado){
            if($dado->tipoStatus == 1){
                $dado->tipoStatus = "Cliente";
            };
            if($dado->tipoStatus == 2){
                $dado->tipoStatus = "Funcionário";
            };

            $linkReadMore = url('/pessoa/' . $dado->id);
            $linkEditItem = url ('/pessoa/editar/' . $dado->id);
            $linkRemoveItem = url ('/pessoa/remover/' . $dado->id);
            echo"<tr>
                 <td>$dado->nome</td>
                 <td>$dado->cpf</td>
                 <td>$dado->email</td>
                 <td>$dado->tipoStatus</td>
                 <td><a href='{$linkReadMore}'>Ver Mais</a> | <a href='{$linkEditItem}'>Editar</a> | <a href='{$linkRemoveItem}'>Excluir</a></td>
                  </tr>";
        }
        echo"</table>";
    }
    ?>
    </div>
@endsection
