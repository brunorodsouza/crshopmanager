@extends('layout')

@section('conteudo')
<body id="fundoLogin">
    <div class="card telaLogin" id="telaLogin">
        <div class="card-body">
            <img src={{asset("storage/img.png")}}>
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
            <h2>Bar do Francês</h2>
            <form method="POST" action="{{route('store.user')}}">
            @csrf

            <div class="form group mb-3">
                <input type="text" class="form-control modificaInput" id="name" name="name"  placeholder="Nome" required>
            </div>

            <div class="form group mb-3">
                <input type="email" class="form-control modificaInput" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
            </div>

            <div class="form group mb-3">
                <input type="password" class="form-control modificaInput" id="password1" name="password" placeholder="Senha" required>
            </div>

            <div class="formp group mb-3">
                <input type="password" class="form-control modificaInput" id="password2" name="password" placeholder="Repita a Senha" required>
            </div>

            <button type="submit" class="btn botaoLogin btn-primary" id="registrar" style="width: 85%">Cadastrar</button>
            </form>

            <div class="wrapLink">
                <a class="underlineHover" href='{{route('esqueceusenha')}}'>Esqueceu sua senha?</a>
                <a class="underlineHover" href='{{route('login')}}'>Já tem cadastro? Entre agora!</a>
            </div>
        </div>
    </div>
    </body>
    @endsection

@section('scripts')
<script src="{{mix("static/js/login.js")}}"></script>
@endsection
