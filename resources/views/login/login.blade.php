@extends('layout')

@section('conteudo')
<body>
    <img src={{asset("storage/hermes-rivera-XUB0bKA13ho-unsplash.jpg")}} alt="Photo by Hermes Rivera on Unsplash" id="imgfundo">

    <div class="card telaLogin" id="telaLogin">
        <div class="card-body">
            <!--<img src={{asset("img/download-removebg-preview.png")}} id="logo">-->
            <h2>C. R. Shop - Soluções Automotivas</h2>
            <form>
                <div class="form-floating">
                    <input type="text" class="form-control modificaInput" id="floatingInputGrid" aria-describedby="emailHelp" placeholder="Usuário" required>
                    <label for="floatingInputGrid">Nome de Usuário</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control modificaInput" id="floatingInputGridSenha" placeholder="Senha" required>
                    <label for="floatingInputGridSenha">Senha</label>
                </div>

                <button type="submit" class="btn botaoLogin" id="botaoLogin" style="width: 85%">Entrar</button>
            </form>
            <div class="wrapLink">
                {{-- <a class="underlineHover" href='esqueceusenha'>Esqueceu sua senha?</a> --}}
                <a class="underlineHover" href="{{route('registrar')}}">Cadastre-se</a>
                <a class="underlineHover" href='{{route('esqueceusenha')}}'>Esqueceu sua senha?</a>
            </div>
        </div>
    </div>
    </body>
    @endsection
