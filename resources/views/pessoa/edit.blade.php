@extends('layout.nav')

@section('conteudo')
    <div class="container my-4">
        <h2 style="margin-bottom: 15px; padding-top:15px;"> Editar Usuário </h2>

        <form  action="<?= url('/pessoa/update',['id' => $dado->id]);?>" method="post">
            @csrf
            @method('PUT')

            <p class="text-center bg-info text-white fw-bold">Tipo de Usuário</p>

            <div class="form-group row">
                <div class="col-sm-6">
                    <label class="form-label" for="nome">Selecione a opção desejada:</label>
                    <select class="form-select"  name="tipoStatus" id="selectedit" style="width:150px; height:35px; margin-left:10px;">
                        @if ($dado->tipoStatus == 1)
                            <option default value="{{$dado->tipoStatus}}"><?="Cliente"?></option>
                            <option value='2'>Funcionário</option>
                        @endif

                        @if ($dado->tipoStatus == 2)
                            <option default value="{{$dado->tipoStatus}}"><?="Funcionário"?></option>
                            <option value='1'>Cliente</option>
                        @endif
                    </select>
                </div>
            </div>

            <p class="text-center bg-info text-white fw-bold">Dados Cadastrais</p>

            <div class="form-group row">
                <div class="col-md-5">
                    <label class="form-label" for="nome">Nome:</label>
                    <input type="text" class="form-control"  id="nome" name="nome" value="{{$dado->nome}}">
                </div>
                <div class="col-md-5">
                    <label class="form-label" for="email">Email: </label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$dado->email}}">
                </div>
                <div class="col-md-2">
                    <label class="form-label" for="cpf">CPF: </label>
                    <input type="text" class="form-control FLDSTRREQ_cpf" id="cpf" name="cpf" minlength="11" maxlength="16" value="{{$dado->cpf}}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">
                    <label class="form-label" for="data_nascimento">Data Nascimento: </label>
                    <input type="text" class="form-control" id="data_nascimento" name="data_nascimento" value="{{$dado->data_nascimento}}">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="telefone">Telefone: </label>
                    <input type="text" class="form-control FLDSTRREQ_telefone" id="telefone" name="telefone" minlength="9" maxlength="16" value="{{$dado->telefone}}">
                </div>
                <div class="col-md-3">
                    <label class="form-label" for="celular">Celular: </label>
                    <input type="text" class="form-control FLDSTRREQ_celular" id="celular" name="celular" minlength="9" maxlength="16" value="{{$dado->celular}}">
                </div>
            </div>

            <p class="text-center bg-info text-white fw-bold">Dados Residênciais</p>

            <div class="form-group row">
                <div class="col-md-2">
                    <label class="form-label" for="cep">CEP: </label>
                    <input type="text" class="form-control FLDSTROPT_cep" id="cep" name="cep" minlength="7" maxlength="12" value="{{$dado->cep}}">
                </div>
                <div class="col-md-1">
                    <label class="form-label" for="uf">UF: </label>
                    <input type="text" class="form-control" id="uf" name="uf" minlength="2" maxlength="2" value="{{$dado->uf}}">
                </div>
                <div class="col-md-5">
                    <label class="form-label" for="cidade">Cidade: </label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="{{$dado->cidade}}">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="bairro">Bairro: </label>
                    <input type="text" class="form-control" id="bairro"  name="bairro" value="{{$dado->bairro}}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label class="form-label" for="cep">Logradouro: </label>
                    <input type="text" class="form-control" id="cep" name="logradouro" value="{{$dado->logradouro}}">
                </div>
                <div class="col-md-1">
                    <label class="form-label" for="numero">Nº: </label>
                    <input type="text" class="form-control" id="numero" name="numero" value="{{$dado->numero}}">
                </div>
                <div class="col-md-5">
                    <label class="form-label" for="complemento">Complemento: </label>
                    <input type="text" class="form-control" id="complemento" name="complemento" value="{{$dado->complemento}}">
                </div>
            </div>

            @if ($dado->tipoStatus == 2 && isset($dado->mecanicos->data_admissao))
                <div id="mecanicoedit" style="content-visibility:visible;">
                    <p class="text-center bg-info text-white fw-bold">Informações do Mecânico</p>
                    <div class="form-group row ">
                        <div class="col-md-3">
                            <label class="form-label" for="cep">Data de Admissão:</label>
                            <input type="date" class="form-control" id="data_admissao" name="data_admissao" value="{{$dado->mecanicos->data_admissao}}">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="uf">Salário:</label>
                            <input type="text" class="form-control" id ="salario" name="salario" value="{{$dado->mecanicos->salario}}">
                        </div>
                    </div>
                </div>
            @else
                <div id="mecanicoedit" style="content-visibility:hidden;">
                    <p class="text-center bg-info text-white fw-bold">Informações do Mecânico</p>
                    <div class="form-group row ">
                        <div class="col-md-3">
                            <label class="form-label" for="cep">Data de Admissão:</label>
                            <input type="date" class="form-control" id="data_admissao" name="data_admissao">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="uf">Salário:</label>
                            <input type="text" class="form-control" id ="salario" name="salario">
                        </div>
                    </div>
                </div>
            @endif

            <div class="mt-4 text-left">
                <button type="submit" class="btn btn-success text-white">Salvar</button>
                <a href="{{route('pessoa')}}" class="btn btn-secondary">Voltar</a>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src='{{asset('/static/js/pessoaEdit.js')}}'></script>
    <script type="text/javascript" src='{{asset('/static/js/jqueryMask-cep-pessoa.js')}}'></script>
@endsection

