<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<title>Escola #{{ $escola->id }}</title>
    </head>
    <body>
        <div class="container">

            <h1>Nome {{ $escola->nome }}</h1>

            <h2>Endereço {{ $escola->endereco }}</h2>

            <h3>CNPJ {{ $escola->cnpj }}</h3>



            <a class="btn btn-light" href="{{ route('escolas.index') }}">Voltar a lista</a>
            <a class="btn btn-warning" href="{{ route('escolas.edit', $escola->id) }}">Editar</a>

            <form method="POST" action="{{ route('escolas.destroy', $escola->id) }}">
                @csrf
                @method('DELETE')

                <input type="submit" value="Excluir Escola" class="btn btn-danger">
            </form>
        </div>
    </body>
</html>
