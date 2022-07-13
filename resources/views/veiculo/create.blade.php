@extends('layout.nav')

@section('conteudo')
    <div class="container my-4">
        <h2 style="margin-bottom:15px; padding-top:15px;"> Novo veículo </h2>

        <form action='{{route('veiculo.store')}}' method="POST">
            @csrf
            <p class="text-center bg-secondary text-white fw-bold">Dados Veículo</p>

            <div class="form-group row">
                <div class="col-md-4">
                    <label class="form-label" for="pessoa">Selecione o Cliente: </label>
                    <select class="custom-select custom-select-md mb-3" name="pessoa" id="pessoa">
                        <option selected>Selecione o Cliente</option>
                        @foreach ( $dados as $dado )
                            @if ($dado->tipoStatus == 1 )
                                <option value="{{$dado->id}}">{{$dado->nome}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="modelo">Modelo: </label>
                    <input type="text" class="form-control" id="modelo" name="modelo">
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="marca">Marca: </label>
                    <input type="text" class="form-control" id="marca" name ="marca">
                </div>

                <div class="col-md-2">
                    <label class="form-label" for="cor">Cor: </label>
                    <input type="text" class="form-control" id="cor" name="cor">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-3">
                    <label class="form-label" for="ano_fab">Ano Fabricação: </label>
                    <input type="text" class="form-control" id="ano_fab" name="ano_fab">
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="ano_mod">Ano Modelo: </label>
                    <input type="text" class="form-control" id="ano_mod" name="ano_mod">
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="combustivel">Combustivel: </label>
                    <input type="text" class="form-control" id="combustivel" name="combustivel">
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="placa">Placa: </label>
                    <input type="text" class="form-control" id="placa" name ="placa">
                </div>
            </div>

            <div class="mt-4 text-end">
                <button type ="submit "class="btn btn-success">Cadastrar</button>
                <a href="{{route('veiculo')}}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
