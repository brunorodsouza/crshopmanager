@extends('layout')

@section('conteudo')
<body>
    <div class="card telaLogin" id="telaRegistrar">
        <div class="card-body">
            <!--<img src={{asset("storage/download-removebg-preview.png")}}>-->
            <h2>Registro de Usuário</h2>
            <form>
                <div class="mb-3">
                    <span class="input-group-text">Matrícula</span>
                    <input type="password" class="form-control modificaInput" id="" placeholder="Senha" required>
                </div>

                <div class="mb-3">
                    <span class="input-group-text">Nome Completo</span>
                    <input type="text" class="form-control modificaInput" id="" aria-describedby="emailHelp" placeholder="Nome Completo" required>
                </div>

                <div class="mb-3">
                    <span class="input-group-text">E-mail</span>
                    <input type="email" class="form-control modificaInput" id="" placeholder="E-mail" required>
                </div>

                <div class="mb-3">
                    <span class="input-group-text">Data de Nascimento</span>
                    <input type="password" class="form-control modificaInput" id="" placeholder="Senha" required>
                </div>

                <div class="mb-3">
                    <span class="input-group-text">CPF</span>
                    <input type="password" class="form-control modificaInput" id="" placeholder="Senha" required>
                </div>

                <div class="mb-3">
                    <span class="input-group-text">Telefone</span>
                    <input type="password" class="form-control modificaInput" id="" placeholder="Senha" required>
                </div>

                <div class="mb-3">
                    <span class="input-group-text">Celular</span>
                    <input type="password" class="form-control modificaInput" id="" placeholder="Senha" required>
                </div>

                <div class="mb-3">
                    <span class="input-group-text">CEP</span>
                    <input type="password" class="form-control modificaInput" id="" placeholder="Senha" required>
                </div>

                <div class="mb-3">
                    <span class="input-group-text">Logradouro</span>
                    <input type="password" class="form-control modificaInput" id="" placeholder="Senha" required>
                </div>

                <div class="mb-3">
                    <span class="input-group-text">Bairro</span>
                    <input type="password" class="form-control modificaInput" id="" placeholder="Senha" required>
                </div>

                <div class="mb-3">
                    <span class="input-group-text">Cidade</span>
                    <input type="password" class="form-control modificaInput" id="" placeholder="Senha" required>
                </div>

                <div class="mb-3">
                    <span class="input-group-text">Estado</span>
                    <input type="password" class="form-control modificaInput" id="" placeholder="Senha" required>
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control modificaInput" id="" placeholder="Senha" required>
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control modificaInput" id="" placeholder="Repita a Senha" required>
                </div>

                <button type="submit" class="btn botaoLogin" style="width: 85%">Cadastrar</button>
            </form>
            <div class="wrapLink">
                <a class="underlineHover" href='{{route('esqueceusenha')}}'>Esqueceu sua senha?</a>
                <a class="underlineHover" href='{{route('login')}}'>Já tem cadastro? Entre agora!</a>
            </div>
        </div>
    </div>
    </body>
    @endsection
