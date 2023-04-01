<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Lista de avaliacao</title>
    </head>
    <body>
        <div class="container">
            <h1>Lista de avaliacao</h1>

            <a class="btn btn-outline-success my-2" href="{{ route('avaliacao.create') }}">Nova Avaliacao</a>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Comentários:</th>
                </tr>

                @foreach ($avaliacao as $avaliacao)
                    <tr>
                        <td>{{ $avaliacao->comentario}}</td>
                        <td>
                            <a class="link" href="{{ route('avaliacao.show', $avaliacao->id) }}">
                                Ver
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>


    </body>
</html>
