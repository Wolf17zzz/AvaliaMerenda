<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Cardapio #{{ $cardapio->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>Edição do Cardapio {{ ($cardapio->id) }}</h1>

            <form method="POST" action="{{ route('cardapios.update', $cardapio->id) }}">
                @csrf
                @method('PUT')

                <div>
                    <label>Dia da Semana</label>
                    <input type="text" name="dia_semana" value="{{ $cardapio->dia_semana }}">
                </div>

                <div>
                    <label>Prato Principal</label>
                    <input type="text" name="refeicao_principal" value="{{ $cardapio->refeicao_principal }}">
                </div>

                <div>
                    <label>Sobremesa</label>
                    <input type="text" name="sobremesa" value="{{ $cardapio->sobremesa }}">
                </div>
                
                <div>
                    <label>Bebida</label>
                    <input type="text" name="bebida" value="{{ $cardapio->bebida }}">
                </div>

                <div>
                    <label>Valor Calórico</label>
                    <input type="text" name="valor_calorico" value="{{ $cardapio->valor_calorico }}">
                </div>

                <div>
                    <input type="submit" name="Atualizar Cardapio" class="btn btn-primary">
                </div>

            </form>
        </div>
    </body>

</html>