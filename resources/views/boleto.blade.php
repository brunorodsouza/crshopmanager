<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Boleto</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>

    <body>
        <h2 style="text-align:center"> <u> Boleto C.R Shop Manager <u> </h2>

        @foreach ($ordem_servico as $header)
            @if ($loop->first)
                <h2 style="text-align:center"> {{$header->placa}}  </h2>
                <br>
                <p style="text-align:center"> {{$header->a}} </p>
            @endif
        @endforeach

        <br>

        <div class="card">
            <div class="card-header text-center">
            <h4> Ordem de Serviço </h4>
            </div>
            <div class="card-body">
                @foreach ($ordem_servico as $boleto)
                    <h5 class="card-title">{{$boleto->titulo}}</h5>
                    <p class="card-text">
                        Valor do Serviço: {{$boleto->valorServico}}<br>
                        Valor Total do Material: {{$boleto->valor_total_material}}<br>
                        <b style="color:blue">Valor total: {{$boleto->valorTotal}}<b>
                    </p>
                @endforeach
            </div>
        </div>
    </body>
</html>
