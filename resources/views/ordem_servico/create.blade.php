@extends('home.home')

@section('conteudo')
<div class="container my-4">
    <h2 style="margin-bottom: 15px; padding-top:15px;"> Nova Ordem de Serviço </h2>

    <form action='{{route('ordem_servico.store')}}' method="POST">
        @csrf
        <p class="text-center bg-secondary text-white fw-bold">Dados Ordem de Serviço</p>

        <div class="form-group row">
            <div class="col-md-3">
                    <label class="form-label" for="id_pessoa">Selecione o Cliente: </label>
                    <select class="custom-select custom-select-md mb-3" name="id_pessoa" id="id_pessoa">
                        @foreach ( $dados['pessoa'] as $dado )
                            @if ($dado->tipoStatus == 1)
                                <option value="{{$dado->id}}">{{$dado->nome}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="id_servico">Selecione os Serviços: </label>
                    <select class="custom-select custom-select-md mb-3" name="id_servico" id="id_servico">
                        @foreach ( $dados['servico'] as $dado )
                            <option value="{{$dado->id}}">{{$dado->titulo}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-3">
                    <label class="form-label" for="id_material">Selecione os Materiais: </label>
                    <select class="custom-select custom-select-md mb-3" name="id_material" id="id_material">
                        @foreach ( $dados['material'] as $dado )
                            <option value="{{$dado->id}}">{{$dado->titulo}}</option>
                        @endforeach


                    </select>
                </div> 
                
                <div class="col-md-3">
                    <label class="form-label" for="id_veiculo">Selecione o Veículo: </label>
                    <select class="custom-select custom-select-md mb-3" name="id_veiculo" id="id_veiculo">
                        @foreach ( $dados['veiculo'] as $dado )
                                <option value="{{$dado->id}}">{{$dado->placa}}</option>
                        @endforeach
                    </select>
                </div>
        </div>

        <div class="form-group row">

            <div class="col-md-3">
                <label  class="form-label" for="data_inicio">Data de Início:</label>
                <input type="date" class="form-control" id="data_inicio" name="data_inicio" required>
            </div>

            <div class="col-md-3">
                <label  class="form-label" for="data_previsao">Data de Previsão:</label>
                <input type="date" class="form-control" id="data_previsao" name="data_previsao" required>
            </div>

            <div class="col-md-3">
                <label  class="form-label" for="data_fim">Data de Fim:</label>
                <input type="date" class="form-control" id="data_fim" name="data_fim" >
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-3">
                <label class="form-label" for="valor_pago">Valor Pago: </label>
                <input type="text" class="form-control" id="valor_pago" name ="valor_pago">
            </div>

            <div class="col-md-3">
                <label class="form-label" for=status_pagamento>Status Pagamento: </label>
                <select class="custom-select custom-select-md mb-3" name="status_pagamento" id="status_pagamento">
                    <option value='1' selected>Pago</option>
                    <option value='0' selected>Não Pago</option>
                </select>
            </div>
        </div>
        
        
        <?php
                    
            foreach ( $dados['material'] as $dado ) {$valormat = $dado->valor;}
            foreach ( $dados['servico'] as $dado ) {$valorser = $dado->valor;}
            
                
        ?>
        
        <input type="hidden" class="form-control" id="valor_total_material" name ="valor_total_material" value="{{$valormat}}">
       
        <input type="hidden" class="form-control" id="valor_servico" name ="valor_servico" value="{{$valorser}}">
        
                
        <div class="mt-4 text-end">
            <button type ="submit "class="btn btn-success">Cadastrar</button>

    </form>
    <a href="{{route('ordem_servico')}}" class="btn btn-secondary">Cancelar</a>
    </div>
</div>
@endsection
