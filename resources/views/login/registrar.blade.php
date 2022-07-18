@extends('layout.login')

@section('conteudo')
    <div class="center fundoLogin">
        <div class="container">
            <div class="justify-content-center row">
                <div class="mb-5 col-md-5 col-xl-4 card">
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

                    <h2 class="text-center ">
                        <img class="mt-2 mb-3" alt="Logo" src={{asset("storage/img.png")}}>
                        <br/>
                       C.R.Shop - Cadastrar
                    </h2>

                    <form method="POST" action="{{route('store.user')}}">
                        @csrf

                        <div class="mt-3 mb-3 form-floating">
                            <input type="text" class="form-control" id="name" name="name"  placeholder="Digite seu nome" required>
                            <label for="username" class="form-label">Digite seu nome</label>
                        </div>

                        <div class="mt-3 mb-3 form-floating">
                            <input type="email" class="form-control" id="email" name="email"  placeholder="Digite seu email"  required >
                            <label for="username" class="form-label">Digite seu email</label>
                        </div>

                        <div class="mt-3 mb-3 form-floating">
                            <input type="password" class="form-control" id="password1" name="password" placeholder="Digite sua senha" required>
                            <label for="username" class="form-label">Digite sua senha</label>
                        </div>

                        <div class="mt-3 mb-3 form-floating">
                            <input type="password" class="form-control" id="password2" name="password" placeholder="Repita a Senha" required>
                            <label for="username" class="form-label">Repita sua senha</label>
                        </div>

                        <button type="submit" class="w-100 mb-1 btn btn-primary btn-lg fst-italic">
                            CADASTRAR
                        </button>
                    </form>

                    <div class="d-flex justify-content-center align-itens-center mb-3">
                        <a class="card-link red-link" href='{{route('login')}}'>Já tem cadastro? Entre agora!</a>
                        <a class="card-link red-link" href="{{route('pessoa')}}">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{mix("static/js/login.js")}}"></script>
    {{-- <script type="text/javascript" src="{{asset("/static/js/login.js")}}"></script> --}}
@endsection
