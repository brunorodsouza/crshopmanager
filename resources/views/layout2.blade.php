<html lang="pt-br">
    <!--HEAD-->
    <head>
        <!--META TAG-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!--TÍTULO DA PÁGINA-->
        <title>C. R. Shop Manager</title>

        <!--CSS-->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!--BOOTSTRAP CSS-->
        <link rel="stylesheet" type="text/css" href={{asset('css/bootstrap/bootstrap.min.css')}}>
    </head>

    <!--BODY-->
    <body>
        @yield('conteudo')
        @yield('scripts')
    </body>
</html>
