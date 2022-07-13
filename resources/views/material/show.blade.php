@extends('layout.nav')

@section('conteudo')
    <div class="container my-4">
    <?php
        if(!empty($dado)){
            foreach ($dado as $d) {
                ?>
                <h2 class="fw-bold text-uppercase" style="margin-bottom: 15px; padding-top:15px;">{{$d->titulo}}</h2>

                <form>
                    <p class="text-center bg-secondary text-white fw-bold">Dados Material</p>

                    <div class="form-group row">
                        <div class="col-md-2">
                            <label class="form-label" for="valor">Valor: </label>
                            <input type="text" class="form-control" id="valor" value="{{$d->valor}}" disabled>
                        </div>
                        <div class="col-md-10">
                            <label class="form-label" for="descricao">Descrição: </label>
                            <input type="text" class="form-control" id="descricao" value="{{$d->descricao}}" disabled>
                        </div>
                    </div>

                    <div class="mt-4 text-left">
                        <a href="{{route('material')}}" class="btn btn-secondary">Voltar</a>
                    </div>
                </form>
                <?php
            }
        }
                ?>
    </div>
@endsection

