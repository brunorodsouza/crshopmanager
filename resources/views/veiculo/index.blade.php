@extends('layout.nav')

@section('conteudo')
    <div class="container my-4">
        <div style=" margin-bottom: 15px; padding-top:15px; display:flex; justify-content:space-between; align-items:center;">
            <h2>Lista de Veículos</h2>
            <a href='{{route('veiculo.novo')}}' class='btn btn-success' style="height: 40px;">Cadastrar</a>
        </div>

        @if (!empty($dados))
            <table class="table table-light table-striped">
                <thead class="table-info">
                    <tr>
                        <td>Cliente</td>
                        <td>Modelo</td>
                        <td>Marca</td>
                        <td>Placa</td>
                        <td>Ações</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ( $dados as $dado )
                        @php
                            $linkReadMore = url('/veiculo/' . $dado->id);
                            $linkEditItem = url ('/veiculo/editar/' . $dado->id);
                            $linkRemoveItem = url ('/veiculo/remover/' . $dado->id);
                        @endphp
                        <tr>
                            <td style="vertical-align:middle">{{$dado->pessoas->nome}}</td>
                            <td style="vertical-align:middle">{{$dado->modelo}}</td>
                            <td style="vertical-align:middle">{{$dado->marca}}</td>
                            <td style="vertical-align:middle">{{$dado->placa}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href={{$linkReadMore}} class="btn btn-info mr-2"><i class="fa fa-eye mr-1 mb-0" aria-hidden="true"></i> Ver Mais</a>
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
