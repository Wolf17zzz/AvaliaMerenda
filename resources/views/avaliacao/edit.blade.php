<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Avaliação</title>
    </head>
    <body>
        <div class="container">
            <h1>Edição do comentário {{ ($comentario->id) }}</h1>

            <form method="POST" action="{{ route('comentario.update', $comentario->id) }}">
                @csrf
                @method('POST')

                <div>
                    <label>Comentário:</label>
                    <textarea name="avaliacao" id="" rows="5" class="form-control" value="{{ $avaliacao->comentario }}" ></textarea>
                </div>

                <div>
                    <input type="submit" name="Atualizar" class="btn btn-primary">
                </div>

            </form>
        </div>
    </body>

</html>
