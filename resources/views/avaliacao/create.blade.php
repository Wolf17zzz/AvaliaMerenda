<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Cadastro de comentários</title>
    </head>
    <body>
        <div class="container mb-3">
            <h1>Novo comentário</h1>

            <form method="POST" action="{{ route('avaliacao.store') }}">
                @csrf

                <div class="mb-3">
                    <label>Comentário:</label>
                    <textarea name="avaliacao" id="" rows="5" class="form-control"></textarea>
                </div>

                <div>
                    <input type="submit" value="Salvar avaliacao" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
