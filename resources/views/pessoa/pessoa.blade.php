@extends('layout')

@section('conteudo')
<body>
    <div class="row">
        <div class="col">
            <div class="container-fluid ">
                <h1>Cadastrar Pessoa</h1>
                <form>
                    <p class="text-center bg-secondary text-white fw-bold">Dados Cadastrais</p>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <label class="form-label" for="nome">Nome:</label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="cpf">CPF:</label>
                            <input type="text" class="form-control" id="cpf" >
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <div class="col-md-6">
                            <label for="matricula" class="form-label">Matrícula:</label>
                            <input type="text" class="form-control" id="matricula" >  
                        </div>
                        <div class="col-md-3">
                            <label  class="form-label" for="data_nascimento">Data Nascimento:</label>
                            <input type="date" class="form-control" id="data_nascimento" >
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="telefone">Telefone:</label>
                            <input type="text" class="form-control" id ="" >
                        </div>
                    </div>

                    <div class="form-group row my-2">
                        <div class="col-md-3">
                            <label  class="form-label" for="celular">Celular:</label>
                            <input type="text" class="form-control" id="celular">
                        </div>
                        <div class="col-md-5">
                            <label  class="form-label" for="email">E-mail:</label>
                            <input type="text" class="form-control" id ="email" >
                        </div>
                    </div>

                    <p class="text-center bg-secondary text-white fw-bold">Dados Residênciais</p>

                    <div class="form-group row">
                        <div class="col-md-4">
                            <label class="form-label" for="cep">CEP:</label>
                            <input type="text" class="form-control" id="cep">
                        </div>
                        <div class="col-md-5">
                            <label class="form-label" for="bairro">Bairro:</label>
                            <input type="text" class="form-control" id ="bairro" >
                        </div>
                        <div class="col-md-2">
                            <div class="form-group row">
                                <label class="form-label" for="numero">Nº:</label>
                                <input type="text" class="form-control" id ="numero" >
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <div class="col-md-6">
                            <label class="form-label" for="logradouro">Logradouro:</label>
                            <input type="text" class="form-control" id="logradouro" >
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="complemento">Complemento:</label>
                            <input type="text" class="form-control" id ="complemento" > 
                        </div>
                    </div>

                    <div class="form-group row mt-2">
                        <div class="col-md-6">
                            <label class="form-label" for="cidade">Cidade:</label>
                            <input type="text" class="form-control" id="cidade" >
                        </div>
                        <div class="col-md-2">
                            <label class="form-label" for="uf">UF:</label>
                            <input type="text" class="form-control" id ="uf"> 
                        </div>
                    </div>

                    <div class="mt-4 text-end">
                        <button type ="submit "class="btn-primary btn mr-3">Confirmar</button>
                        <button type ="button "class="btn-secondary btn">Cancelar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>
@endsection
