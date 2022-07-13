@extends('layout.nav')

@section('conteudo')
    <div class="container my-4">
        <div style="margin-bottom:15px; padding-top:15px; display:flex; justify-content:space-between; align-items:center">
            <h2>Lista de Ordem de Serviços</h2>
            <a href='{{route('ordem_servico.novo')}}' class='btn btn-success' style="height: 40px;">Cadastrar</a>
        </div>

        @if (!empty($dados))
            <table class="table table-light table-striped">
                <thead class="table-info">
                    <tr>
                    <td>Cliente</td>
                    <td>Veículo</td>
                    <td>Valor do Serviço</td>
                    <td>Status do Pagamento</td>
                    <td>Ações</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ( $dados as $dado )
                        @php
                            $linkReadMore = url('/ordem_servico/' . $dado->id);
                            $linkEditItem = url ('/ordem_servico/editar/' . $dado->id);
                            $linkRemoveItem = url ('/ordem_servico/remover/' . $dado->id);
                            $linkBoleto = url ('/pdf/' . $dado->id);
                        @endphp

                        @if ($dado->status_pagamento == 1)
                            @php
                                $recebePago = 'Pago';
                            @endphp
                        @else
                            @php
                                $recebePago = 'Não Pago';
                            @endphp
                        @endif

                        <tr>
                            <td>{{$dado->pessoas->nome}}</td>
                            <td>{{$dado->veiculos->placa}}</td>
                            <td>{{$dado->valor_servico}}</td>
                            <td>{{$recebePago}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href={{$linkReadMore}} class="btn btn-info mr-2">Ver Mais</a>
                                    @if ($dado->status_pagamento == 0)
                                        <a target=_blank href={{$linkBoleto}} class="btn btn-success mr-2">Boleto</a>
                                    @endif
                                    <a href={{$linkEditItem}} class="btn btn-warning mr-2">Editar</a>
                                    <a href={{$linkRemoveItem}} class="btn btn-danger mr-2">Excluir</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
