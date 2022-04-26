@extends('layout')

@section('conteudo')
<body id="fundoLogin">
    <div class="card telaLogin" id="telaLogin">
        <div class="card-body">
            <img src={{asset("storage/download-removebg-preview.png")}}>
            <h4>Insira o seu email e enviaremos um link para você voltar a acessar a sua conta.</h4>
            <form>
                <div class="mb-3">
                    <input type="email" class="form-control modificaInput" id="" aria-describedby="emailHelp" placeholder="Email" required>
                </div>

                <button type="submit" class="btn botaoLogin" style="width: 85%">Enviar</button>
            </form>
            <div class="wrapLink">
                <a class="underlineHover" href="/">Já tem cadastro? Entre agora!</a>
            </div>
        </div>
    </div>
    </body>
    @endsection
