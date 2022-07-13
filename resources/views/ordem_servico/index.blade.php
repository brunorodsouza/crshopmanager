@extends('layout.nav')

@section('conteudo')
    <div class="container my-4">
        <div style=" margin-bottom:15px; padding-top:15px; display:flex; justify-content:space-between; align-items:center">
            <h2>Lista de Ordem de Serviços</h2>
            <a href='{{route('ordem_servico.novo')}}' class='btn btn-success' style="height: 40px;">Cadastrar</a>
        </div>
        <?php
            if (!empty($dados)){
                echo"<table class='table table-striped table-hover'>";
                echo"<thead class='bg-secondary text-white'>
                        <td>Cliente</td>
                        <td>Veículo</td>
                        <td>Valor do Serviço</td>
                        <td>Status do Pagamento</td>
                        <td>Ações</td>
                    </thead>";

                foreach($dados as $dado){
                    $linkReadMore = url('/ordem_servico/' . $dado->id);
                    $linkEditItem = url ('/ordem_servico/editar/' . $dado->id);
                    $linkRemoveItem = url ('/ordem_servico/remover/' . $dado->id);
                    $linkBoleto = url ('/pdf/' . $dado->id);

                    if($dado->status_pagamento == 1){
                        $recebePago = 'Pago';
                    }else{
                        $recebePago = 'Não Pago';
                    }

                    if($dado->status_pagamento == 0){
                    echo"<tr>
                            <td>{$dado->pessoas->nome}</td>
                            <td>{$dado->veiculos->placa}</td>
                            <td>{$dado->valor_servico}</td>
                            <td>{$recebePago}</td>
                            <td><a href='{$linkReadMore}'>Ver Mais</a> | <a href='{$linkEditItem}'>Editar</a> | <a href='{$linkRemoveItem}'>Excluir</a>  | <a target=_blank href='{$linkBoleto}'>Boleto</a></td>
                        </tr>";
                    }else{
                        echo"<tr>
                            <td>{$dado->pessoas->nome}</td>
                            <td>{$dado->veiculos->modelo}</td>
                            <td>{$dado->servicos->titulo}</td>
                            <td>{$recebePago}</td>
                            <td><a href='{$linkReadMore}'>Ver Mais</a> | <a href='{$linkEditItem}'>Editar</a> | <a href='{$linkRemoveItem}'>Excluir</a></td>
                        </tr>";
                        }
                    }
                echo"</table>";
                }
            ?>
    </div>
@endsection
