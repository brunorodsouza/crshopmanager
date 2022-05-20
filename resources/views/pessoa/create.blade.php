@extends('home.home')

@section('conteudo')
<div class="container my-4">
    <h2 style="margin-bottom: 15px; padding-top:15px;"> Cadastro de Pessoa </h2>

    <form action='{{route('pessoa.store')}}' method="POST">
        @csrf
        <p class="text-center bg-secondary text-white fw-bold">Dados Cadastrais</p>

        <div class="form-group row">
            <div class="col-md-6">
                <label class="form-label" for="nome">Nome:</label>
                <input type="text" class="form-control"  id="nome" name="nome" required>
            </div>
            <div class="col-md-2">
                <label class="form-label" for="cpf">CPF:</label>
                <input type="text" class="form-control" minlength="11" maxlength="16" id="cpf" name="cpf" required>
            </div>
            <div class="col-md-2">
                <label for="matricula" class="form-label">Matrícula:</label>
                <input type="text" class="form-control" minlength="11" maxlength="16" id="matricula" name="matricula" required>
            </div>
            <div class="col-md-2">
                <label  class="form-label" for="data_nascimento">Data Nascimento:</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
            </div>
        </div>

        <div class="form-group row mt-2">
            <div class="col-md-3">
                <label class="form-label" for="telefone">Telefone:</label>
                <input type="text" class="form-control"  minlength="9" maxlength="16" id ="telefone" name="telefone" required>
            </div>
            <div class="col-md-3">
                <label  class="form-label" for="celular">Celular:</label>
                <input type="text" class="form-control" minlength="9" maxlength="16" id="celular" name="celular" required>
            </div>
            <div class="col-md-6">
                <label  class="form-label" for="email">E-mail:</label>
                <input type="email" class="form-control" id ="email" name="email" required>
            </div>
        </div>

        <p class="text-center bg-secondary text-white fw-bold">Dados Residênciais</p>

        <div class="form-group row">
            <div class="col-md-2">
                <label class="form-label" for="cep">CEP:</label>
                <input type="text" class="form-control" minlength="7" maxlength="12" id="cep" name="cep">
            </div>
            <div class="col-md-1">
                <label class="form-label" for="uf">UF:</label>
                <input type="text" class="form-control"  minlength="2" maxlength="2" id ="uf" name="uf">
            </div>
            <div class="col-md-5">
                <label class="form-label" for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="bairro">Bairro:</label>
                <input type="text" class="form-control" id ="bairro" name="bairro">
            </div>

        </div>

        <div class="form-group row mt-2">
            <div class="col-md-6">
                <label class="form-label" for="logradouro">Logradouro:</label>
                <input type="text" class="form-control" id="logradouro" name="logradouro" >
            </div>
            <div class="col-md-1">
                <label class="form-label" for="numero">Nº:</label>
                <input type="text" class="form-control" id ="numero" name="numero">
            </div>
            <div class="col-md-5">
                <label class="form-label" for="complemento">Complemento:</label>
                <input type="text" class="form-control" id ="complemento" name="complemento">
            </div>
        </div>

        <div class="mt-4 text-end">
            <button type ="submit "class="btn btn-success">Confirmar</button>

    </form>
    <a href="{{route('pessoa')}}" class="btn btn-secondary">Cancelar</a>
</div>
</div>
@endsection
