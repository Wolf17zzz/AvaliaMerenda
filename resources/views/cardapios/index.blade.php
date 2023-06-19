<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        @vite(['resources/sass/index.cardapio.scss'])
        
        <title>Cardapio da Semana</title>
    </head>
    <body>
        <div class="page">
        <div class="container">
            <h1>Cardapio da Semana</h1>

            <a class="btn btn-outline-success my-2" href="{{ route('cardapios.create') }}">Novo Cardapio</a>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Dia da Semana</th>
                    <th>Prato Principal</th>
                    <th>Sobremesa</th>
                    <th>Bebida</th>
                    <th>Valor Calórico</th>
                </tr>

                @foreach ($cardapios as $cardapio)
                    <tr>
                        <td>{{ $cardapio->dia_semana }}</td>
                        <td>{{ $cardapio->refeicao_principal }}</td>
                        <td>{{ $cardapio->sobremesa }}</td>
                        <td>{{ $cardapio->bebida }}</td>
                        <td>{{ $cardapio->valor_calorico }}</td>
                        <td>
                            <a class="link" href="{{ route('cardapios.show', $cardapio->id) }}">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        </div>
    </body>
</html>