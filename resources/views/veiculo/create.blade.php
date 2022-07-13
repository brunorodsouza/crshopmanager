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

                <div class="col-md-4">
                    <label class="form-label" for="modelo">Modelo: </label>
                    <select class="custom-select custom-select-md mb-3" id="modelo" name="modelo">
                        <option selected>Selecione o Modelo</option>
                        <option value='Carro Conversível'>Carro Conversível</option>
                        <option value='Carro Sedã'>Carro Sedã</option>
                        <option value='Carro Hatch'>Carro Hatch</option>
                        <option value='Coupé ou Cupê (Fastback)'>Coupé ou Cupê (Fastback)</option>
                        <option value='Perua ou SW (Station Wagons)'>Perua ou SW (Station Wagons)</option>
                        <option value='SUV ou Veículo Utilitário Esportivo'>SUV ou Veículo Utilitário Esportivo</option>
                        <option value='Picape'>Picape</option>
                        <option value='Minivan'>Minivan</option>
                        <option value='Van ou utilitário'>Van ou utilitário</option>
                        <option value='Buggy ou bugre'>Buggy ou bugre</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="form-label" for="marca">Marca: </label>
                    <select class="custom-select custom-select-md mb-3" id="marca" name ="marca">
                        <option selected>Selecione a Marca</option>
                        <option value='Ford'>Ford</option>
                        <option value='Chevrolet'>Chevrolet</option>
                        <option value='Toyota'>Toyota</option>
                        <option value='BMW'>BMW</option>
                        <option value='Volkswagen'>Volkswagen</option>
                        <option value='Ferrari'>Ferrari</option>
                        <option value='Hyundai'>Hyundai</option>
                        <option value='Honda'>Honda</option>
                        <option value='Land Rover'>Land Rover</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-3">
                    <label class="form-label" for="cor">Cor: </label>
                    <input type="text" class="form-control" id="cor" name="cor">
                </div>

                <div class="col-md-2">
                    <label class="form-label" for="ano_fab">Ano Fabricação: </label>
                    <input type="number" min="1950" max="2099" class="form-control" minlength="4" maxlength="4" id="ano_fab" name="ano_fab">
                </div>

                <div class="col-md-2">
                    <label class="form-label" for="ano_mod">Ano Modelo: </label>
                    <input type="number" min="1950" max="2099" class="form-control" minlength="4" maxlength="4" id="ano_mod" name="ano_mod">
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="combustivel">Combustível: </label>
                    <select class="custom-select custom-select-md mb-3" name="combustivel" id="combustivel">
                        <option selected>Selecione o Combustível</option>
                        <option value='Gasolina aditivada'>Gasolina aditivada</option>
                        <option value='Gasolina premium'>Gasolina premium</option>
                        <option value='Gasolina formulada'>Gasolina formulada</option>
                        <option value='Etanol'>Etanol</option>
                        <option value='Etanol aditivado'>Etanol aditivado</option>
                        <option value='GNV (Gás Natural Veicular)'>GNV (Gás Natural Veicular)</option>
                        <option value='Diesel'>Diesel</option>
                    </select>
                </div>

                <div class="col-md-2">
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
