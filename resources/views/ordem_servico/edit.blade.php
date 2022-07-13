@extends('layout.nav')

@section('conteudo')
    <div class="container my-4">
        <h2 style="margin-bottom: 15px; padding-top:15px;"> Editar Ordem de Serviço </h2>

        <form  action="<?= url('/ordem_servico/update',['id' => $dados->id]);?>" method="post">
            @csrf
            @method('PUT')

            <p class="text-center bg-secondary text-white fw-bold">Dados de Ordem de Serviço</p>

            <div class="form-group row">
                <div class="col-md-3">
                    <label class="form-label" for="id_pessoa">Cliente: </label>
                        <input type="text" class="form-control" id="cliente" value="{{$dados->pessoas->nome}}"disabled>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="id_pessoa">Serviços: </label>
                        <input type="text" class="form-control" id="servico" value="{{$dados->servicos->titulo}}"disabled>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="id_material">Materiais: </label>
                        <input type="text" class="form-control" id="material" value="{{$dados->materiais->titulo}}"disabled>
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="id_pessoa">Veículo: </label>
                        <input type="text" class="form-control" id="veiculo" value="{{$dados->veiculos->placa}}"disabled>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-4">
                    <label  class="form-label" for="data_inicio">Data de Início:</label>
                    <input type="date" class="form-control" id="data_inicio" name="data_inicio" value="{{$dados->data_inicio}}"required>
                </div>

                <div class="col-md-4">
                    <label  class="form-label" for="data_previsao">Data de Previsão:</label>
                    <input type="date" class="form-control" id="data_previsao" name="data_previsao" value="{{$dados->data_previsao}}"required>
                </div>

                <div class="col-md-4">
                    <label  class="form-label" for="data_fim">Data de Fim:</label>
                    <input type="date" class="form-control" id="data_fim" name="data_fim" value="{{$dados->data_fim}}"required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-3">
                    <label class="form-label" for="valor_total_material">Valor do Material: </label>
                    <input type="text" class="form-control" id="valor_total_material" name ="valor_total_material" value="{{$dados->valor_total_material}}"disabled>
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="valor_servico">Valor do Serviço: </label>
                    <input type="text" class="form-control" id="valor_servico" name ="valor_servico" value="{{$dados->valor_servico}}"disabled>
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="valor_pago">Valor Pago: </label>
                    <input type="text" class="form-control" id="valor_pago" name ="valor_pago" value="{{$dados->valor_pago}}">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for=status_pagamento>Status Pagamento: </label>
                    <select class="custom-select custom-select-md mb-3" name="status_pagamento" id="status_pagamento">
                        <option value='1' selected>Pago</option>
                        <option value='0' selected>Não Pago</option>
                    </select>
                </div>
            </div>

            <div class="mt-4 text-left">
                <button type="submit" class="btn btn-success text-white">Salvar</button>
                <a href="{{route('ordem_servico')}}" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
@endsection
