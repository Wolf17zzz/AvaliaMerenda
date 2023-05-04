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
            <h1>Editar Escola {{ $escola->id }}</h1>

            <form method="POST" action="{{ route('escolas.update', $escola->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" value="{{ $escola->nome }}">
                </div>

                <div class="mb-3">
                    <label>Endereço</label>
                    <input type="text" name="endereco" class="form-control" value="{{ $escola->endereco }}">
                </div>

                <div class="mb-3">
                    <label>CNPJ</label>
                    <input type="number" name="cnpj" class="form-control" value="{{ $escola->cnpj }}">
                </div>

                <div>
                    <input type="submit" value="Atualizar Escola" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
