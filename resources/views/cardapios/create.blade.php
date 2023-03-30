<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Cadastro do Cardapio</title>
    </head>
    <body>
        <div class="container mb-3">
            <h1>Novo Cardapio</h1>

            <form method="POST" action="{{ route('cardapios.store') }}">
                @csrf

                <div class="mb-3">
                    <label>Dia da Semana</label>
                    <input type="text" name="dia_semana" class="form-control">
                </div>
                
                <div>
                    
                </div>

            </form>
        </div>
    </body>
</html>