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
            <h2 class="card-title">C. R. Shop - Manager</h2>

            <!--FORM DO CARD-->
            <form method="POST" action='{{route('login')}}'>
            @csrf
                <div class="input-group">
                    <span class="input-group-text" id="email">E-mail</span>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="crshopmanager@gmail.com" required>
                </div>

                <div class="input-group" id="inputGroupAlign">
                    <span class="input-group-text" id="password">Senha</span>
                    <input type="password" class="form-control" id="password" name="password" placeholder="*********" required>
                </div>

                <button type="submit" class="btn botaoLogin">Entrar</button>
            </form>

            <div class="">
                <a class="card-link" href="{{route('register')}}">Cadastre-se</a>
            </div>
        </div>
    </div>
</body>
@endsection

@section('scripts')
    <script type="text/javascript" src='{{asset('/static/js/bootstrap.js')}}'></script>
@endsection
