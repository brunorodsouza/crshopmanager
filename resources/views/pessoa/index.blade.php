@extends('layout.nav')

@section('conteudo')
    <div class="container my-4">
        <div style="margin-bottom: 15px; padding-top:15px; display:flex; justify-content:space-between; align-items:center;">
            <h2>Lista de Usuários</h2>
            <a href='{{route('pessoa.novo')}}' class='btn btn-success' style="height: 40px;">Cadastrar</a>
        </div>

        @if (!empty($dados))
            <table class="table table-light table-striped">
                <thead class="table-info">
                    <tr>
                        <td>Nome</td>
                        <td>CPF</td>
                        <td>Email</td>
                        <td>Tipo de Usuário</td>
                        <td>Ações</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ( $dados as $dado )
                        @php
                            $linkReadMore = url('/pessoa/' . $dado->id);
                            $linkEditItem = url ('/pessoa/editar/' . $dado->id);
                            $linkRemoveItem = url ('/pessoa/remover/' . $dado->id);
                        @endphp

                        @if ($dado->tipoStatus == 1)
                            @php
                                $dado->tipoStatus = "Cliente";
                            @endphp
                        @else
                            @php
                                $dado->tipoStatus = "Funcionário";
                            @endphp
                        @endif

                        <tr>
                            <td>{{$dado->nome}}</td>
                            <td>{{$dado->cpf}}</td>
                            <td>{{$dado->email}}</td>
                            <td>{{$dado->tipoStatus}}</td>
                            <td>
                                <div class="d-flex">
                                    <a href={{$linkReadMore}} class="btn btn-info mr-2">Ver Mais</a>
                                    <a href={{$linkEditItem}} class="btn btn-warning mr-2" style="color:white">Editar</a>
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
