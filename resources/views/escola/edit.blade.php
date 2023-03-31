<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Escola</title>
    </head>
    <body>
        <div class="container">
            <h1>Edição da Escola {{ ($escola->id) }}</h1>

            <form method="POST" action="{{ route('escola.update', $escola->id) }}">
                @csrf
                @method('POST')

                <div>
                    <label>Nome</label>
                    <input type="text" name="nome" value="{{ $escola->nome }}">
                </div>

                <div>
                    <label>Endereço</label>
                    <input type="text" name="endereco" value="{{ $escola->endereco }}">
                </div>

                <div>
                    <label>CNPJ</label>
                    <input type="string" name="cnpj" value= "{{ $escola->cnpj }}">
                </div>

                <div>
                    <input type="submit" name="Atualizar" class="btn btn-primary">
                </div>

            </form>
        </div>
    </body>

</html>