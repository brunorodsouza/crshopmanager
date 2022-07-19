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
                    <td>Placa</td>
                    <td>Valor a Pagar</td>
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
                            $linkBoleto = url ('/pdf/' . $dado->veiculos->id);
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
                            <td style="vertical-align:middle">{{$dado->pessoas->nome}}</td>
                            <td style="vertical-align:middle">{{$dado->veiculos->placa}}</td>
                            <td style="vertical-align:middle">{{$dado->valor_pago}}</td>

                            @if ($recebePago == 'Pago')
                                <td style="vertical-align:middle"> <i class="fa fa-check" style="color: #28a745"> &nbsp;{{$recebePago}} </td>
                            @endif

                            @if ($recebePago == 'Não Pago')
                                <td style="vertical-align:middle"> <i class="fa fa-times" style="color: #dc3545"> &nbsp;{{$recebePago}} </td>
                            @endif

                            <td>
                                <div class="d-flex">
                                    <a href={{$linkReadMore}} class="btn btn-info mr-2"><i class="fa fa-eye mr-1 mb-0" aria-hidden="true"></i>Ver Mais</a>
                                    @if ($dado->status_pagamento == 0)
                                        <a target=_blank href={{$linkBoleto}} class="btn btn-success mr-2"><i class="fa fa-file mr-1 mb-0" aria-hidden="true"></i>Boleto</a>
                                    @endif
                                    <a href={{$linkEditItem}} class="btn btn-warning mr-2" style="color:white"><i class="fa fa-pen mr-1 mb-0" aria-hidden="true"></i>Editar</a>
                                    <a href={{$linkRemoveItem}} class="btn btn-danger mr-2"><i class="fa fa-trash mr-1 mb-0" aria-hidden="true"></i>Excluir</a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection

{{-- <i class="fa fa-check" aria-hidden="true"> --}}
{{-- <i class="fa fa-x" aria-hidden="true"> --}}
