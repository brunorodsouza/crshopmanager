@extends('home.home')

@section('conteudo')
<div class="container my-4">
    <h1> CRIANDO VAGABUNDOS que frequentam o bar do frances </h1>

    <form action='{{route('pessoa.store')}}' method="POST">
        @csrf
        <p class="text-center bg-secondary text-white fw-bold">Dados Cadastrais</p>

        <div class="form-group row">
            <div class="col-md-6">
                <label class="form-label" for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" >
            </div>
        </div>

        <div class="form-group row mt-2">
            <div class="col-md-6">
                <label for="matricula" class="form-label">Matrícula:</label>
                <input type="text" class="form-control" id="matricula" name="matricula">
            </div>
            <div class="col-md-3">
                <label  class="form-label" for="data_nascimento">Data Nascimento:</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" >
            </div>
            <div class="col-md-3">
                <label class="form-label" for="telefone">Telefone:</label>
                <input type="text" class="form-control" id ="" name="telefone" >
            </div>
        </div>

        <div class="form-group row my-2">
            <div class="col-md-3">
                <label  class="form-label" for="celular">Celular:</label>
                <input type="text" class="form-control" id="celular" name="celular">
            </div>
            <div class="col-md-5">
                <label  class="form-label" for="email">E-mail:</label>
                <input type="text" class="form-control" id ="email" name="email">
            </div>
        </div>

        <p class="text-center bg-secondary text-white fw-bold">Dados Residênciais</p>

        <div class="form-group row">
            <div class="col-md-4">
                <label class="form-label" for="cep">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep">
            </div>
            <div class="col-md-5">
                <label class="form-label" for="bairro">Bairro:</label>
                <input type="text" class="form-control" id ="bairro" name="bairro">
            </div>
            <div class="col-md-2">
                <div class="form-group row">
                    <label class="form-label" for="numero">Nº:</label>
                    <input type="text" class="form-control" id ="numero" name="numero">
                </div>
            </div>
        </div>

        <div class="form-group row mt-2">
            <div class="col-md-6">
                <label class="form-label" for="logradouro">Logradouro:</label>
                <input type="text" class="form-control" id="logradouro" name="logradouro" >
            </div>
            <div class="col-md-6">
                <label class="form-label" for="complemento">Complemento:</label>
                <input type="text" class="form-control" id ="complemento" name="complemento">
            </div>
        </div>

        <div class="form-group row mt-2">
            <div class="col-md-6">
                <label class="form-label" for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade">
            </div>
            <div class="col-md-2">
                <label class="form-label" for="uf">UF:</label>
                <input type="text" class="form-control" id ="uf" name="uf">
            </div>
        </div>

        <div class="mt-4 text-end">
            <button type ="submit "class="btn-primary btn mr-3">Confirmar</button>
            <button type ="button "class="btn-secondary btn">Cancelar</button>
        </div>
    </form>
</div>
@endsection
