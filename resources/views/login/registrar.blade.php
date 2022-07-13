@extends('layout.login')

@section('conteudo')
<body id="fundoLogin">
    <div class="card telaLogin" id="telaLogin">
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if (session('danger'))
                <div class="alert alert-danger">
                    {{ session('danger') }}
                </div>
            @endif

            <img src={{asset("storage/img.png")}}>
            <h2 class="card-title">Cadastro de Acesso</h2>

            <form method="POST" action="{{route('store.user')}}">
            @csrf
                <div class="input-group">
                    <span class="input-group-text" id="name">Nome</span>
                    <input type="text" class="form-control" id="name" name="name"  placeholder="crshopmanager" required>
                </div>

                <div class="input-group" id="inputGroupAlign">
                    <span class="input-group-text" id="email">E-mail</span>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="crshopmanager@gmail.com" required>
                </div>

                <div class="input-group" id="inputGroupAlign">
                    <span class="input-group-text" id="password1">Senha</span>
                    <input type="password" class="form-control" id="password1" name="password" placeholder="*********" required>
                </div>

                <div class="input-group" id="inputGroupAlign">
                    <span class="input-group-text" id="password2">Repita a senha</span>
                    <input type="password" class="form-control" id="password2" name="password" placeholder="Repita a Senha" required>
                </div>

                <button type="submit" class="btn botaoLogin" id="registrar">Cadastrar</button>
            </form>

            <div class="">
                <a class="card-link" href='{{route('login')}}'>Já tem cadastro? Entre agora!</a>
            </div>
        </div>
    </div>
</body>
@endsection

@section('scripts')
    <script src="{{mix("static/js/login.js")}}"></script>
    {{-- <script type="text/javascript" src="{{asset("/static/js/login.js")}}"></script> --}}
@endsection
