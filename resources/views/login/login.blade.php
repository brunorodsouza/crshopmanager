@extends('layout')

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
            <h2>C. R. Shop Manager</h2>
            <form method="POST" action='{{route('auth.user')}}'>
            @csrf
                <div class="mb-3">
                    <input type="email" class="form-control modificaInput" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control modificaInput" id="password" name="password" placeholder="Senha" required>
                </div>

                <button type="submit" class="btn botaoLogin" style="width: 85%">Entrar</button>
            </form>
            <div class="wrapLink">
                <a class="underlineHover" href='{{route('esqueceusenha')}}'>Esqueceu sua senha?</a>
                <a class="underlineHover" href="{{route('registrar')}}">Novo por aqui? Cadastre-se</a>
            </div>
        </div>
    </div>
    </body>
    @endsection
