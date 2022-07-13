@extends('layout.nav')

@section('conteudo')
    <div class="container my-4">
        @if (!empty($dados))
            @foreach ($dados as $d)
                <h2 class="fw-bold text-uppercase" style="margin-bottom:15px; padding-top:15px;">{{$d->pessoas->nome}} </h2>
                <form>
                    <p class="text-center bg-secondary text-white fw-bold">Dados de Ordem de Serviço</p>

                    <div class="form-group row">
                        <div class="col-md-4">
                            <label class="form-label" for="id_pessoa">Cliente: </label>
                            <input type="text" class="form-control" id="modelo" value="{{$d->pessoas->nome}}" disabled>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="modelo">Serviços: </label>
                            <input type="text" class="form-control" id="modelo" name="servicos" value="{{$d->servicos->titulo}}" disabled>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="modelo">Materiais: </label>
                            <input type="text" class="form-control" id="modelo" name="materiais[]" value="{{$d->materiais->titulo}}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            <label class="form-label" for="data_inicio">Data de Início: </label>
                            <input type="text" class="form-control" id="data_inicio" value="{{$d->data_inicio}}" disabled>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="data_previsao">Data de Previsão: </label>
                            <input type="text" class="form-control" id="data_previsao" value="{{$d->data_previsao}}" disabled>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label" for="data_fim">Data de Fim: </label>
                            <input type="text" class="form-control" id="data_fim" value="{{$d->data_fim}}" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3">
                            <label class="form-label" for="valor_total_material">Valor do Material: </label>
                            <input type="text" class="form-control" id="valor_total_material" value="{{$d->valor_total_material}}" disabled>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="valor_servico">Valor do Serviço: </label>
                            <input type="text" class="form-control" id="valor_servico" value="{{$d->valor_servico}}" disabled>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="valor_pago">Valor Pago: </label>
                            <input type="text" class="form-control" id="valor_pago" value="{{$d->valor_pago}}" disabled>
                        </div>
                        <div class="col-md-3">
                            @if ($d->status_pagamento == 1)
                                <label class="form-label" for="status_pagamento">Status Pagamento: </label>
                                <input type="text" class="form-control" id="status_pagamento" value="Pago" disabled>
                            @else
                                <label class="form-label" for="status_pagamento">Status Pagamento: </label>
                                <input type="text" class="form-control" id="status_pagamento" value="Não Pago" disabled>
                            @endif
                        </div>
                    </div>

                    <div class="mt-4 text-left">
                        <a href="{{route('ordem_servico')}}" class="btn btn-secondary">Voltar</a>
                    </div>
                </form>
            @endforeach
        @endif
    </div>
@endsection

