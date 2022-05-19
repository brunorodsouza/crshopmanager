@extends('layout')

@section('conteudo')   
<body id="fundoLogin">
    <div class="card telaLogin" id="telaLogin">
        <div class="card-body">
            <img src={{asset("storage/img.png")}}>
            <h2 class="card-title">Recuperação de Senha</h2>
            <h6 class="card-subtitle text-muted">Insira o seu email e enviaremos um link para você voltar a acessar a sua conta.</h4>
            <form>
                <div class="input-group">
                    <span class="input-group-text" id="email">E-mail</span>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="crshopmanager@gmail.com" required>
                </div>

                <button type="submit" class="btn botaoLogin">Enviar</button>
            </form>
            <div class="container-fluid">
                <a class="card-link" href='{{route('login')}}'>Já tem cadastro? Entre agora!</a>
            </div>
        </div>
    </div>
</body>
@endsection

@section('scripts') 
    <script type="text/javascript" href={{asset('../js/bootstrap.js')}}></script>
    <script type="text/javascript" href={{asset('../js/login.js')}}></script>
@endsection
