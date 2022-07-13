@extends('layout.nav')

@section('conteudo')
    <div class="container my-4">
        <?php
            if(!empty($dado)){
                foreach ($dado as $d) {
        ?>
                    <h2 class="fw-bold text-uppercase" style="margin-bottom: 15px; padding-top:15px;">{{$d->pessoas->nome}}</h2>

                    <form>
                        <p class="text-center bg-secondary text-white fw-bold">Dados Veículo</p>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <label class="form-label" for="id_pessoa">Cliente: </label>
                                <input type="text" class="form-control" id="modelo" value="{{$d->pessoas->nome}}"disabled>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="modelo">Modelo: </label>
                                <input type="text" class="form-control" id="modelo" value="{{$d->modelo}}" disabled>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="marca">Marca: </label>
                                <input type="text" class="form-control" id="marca" value="{{$d->marca}}" disabled>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="cor">Cor: </label>
                                <input type="text" class="form-control" id="cor" value="{{$d->cor}}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3">
                                <label class="form-label" for="ano_fab">Ano Fabricação: </label>
                                <input type="text" class="form-control" id="ano_fab" value="{{$d->ano_fab}}" disabled>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="ano_mod">Ano Modelo: </label>
                                <input type="text" class="form-control" id="ano_mod" value="{{$d->ano_mod}}" disabled>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="combustivel">Combustivel: </label>
                                <input type="text" class="form-control" id="combustivel" value="{{$d->combustivel}}" disabled>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label" for="placa">Placa: </label>
                                <input type="text" class="form-control" id="placa" value="{{$d->placa}}" disabled>
                            </div>
                        </div>

                        <div class="mt-4 text-left">
                            <a href="{{route('veiculo')}}" class="btn btn-secondary">Voltar</a>
                        </div>
                    </form>
                    <?php
                }
            }
                    ?>
    </div>
@endsection

