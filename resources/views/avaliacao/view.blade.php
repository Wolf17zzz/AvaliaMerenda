<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Comentário #{{ $avaliacao->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>{{ $avaliacao->comentario }}</h1>

           <a class="btn btn-light" href="{{ route('avaliacao.index') }}">Voltar a lista</a>
            <a class="btn btn-warning" href="{{ route('avaliacao.edit', $avaliacao->id) }}">Editar</a>

            <form method="POST" action="{{ route('avaliacao.destroy', $avaliacao->id) }}">
                @csrf
                @method('DELETE')

                <input type="submit" value="Excluir avaliação" class="btn btn-danger">
            </form>
        </div>
    </body>
</html>
