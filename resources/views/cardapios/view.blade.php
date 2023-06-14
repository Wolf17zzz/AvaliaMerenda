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
            <h1>Dia: {{ $cardapio->dia_semana }}</h1>

            <h3>Prato do Dia: {{ $cardapio->refeicao_principal }}</h3>

            <h3>Sobremesa: {{ $cardapio->sobremesa }}</h3>

            <h3>Bebida: {{ $cardapio->bebida }}</h3>

            <h3>Valor Calórico: {{ $cardapio->valor_calorico }}</h3>

                <br>
                <br>
            <a  class="btn btn-primary" href="{{ route('cardapios.index') }}">Voltar para Cardapio</a>
                <br>
                <br>
            <a  class="btn btn-primary" href="{{ route('cardapios.edit', $cardapio->id) }}">Editar Cardapio</a>
                <br>
                <br>
            <form method="POST" action="{{ route('cardapios.destroy', $cardapio->id) }}">
                @csrf 
                @method('DELETE')
                
                <input type="submit" value="Excluir Cardapio" class="btn btn-danger">
            </form>

    </body>
</html>