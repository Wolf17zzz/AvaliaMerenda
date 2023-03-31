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
    <form method="POST" action="{{ route('escola.destroy', $escola->id) }}">
            @csrf
        <label form="">Tem certeza que deseja excluir essa escola?</label> <br />
        <input type="text" name="nome" value="{{ $escola->nome}}"> <br />
        <button>Sim</button>
        </form>
    </body>
</html>