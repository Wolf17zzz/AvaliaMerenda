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

            <div class="my-3 p-3 border rounded">
                <h1>Nova avaliação</h1>

                <form method="POST" action="{{ route('avaliacao.store', $cardapio->id) }}">
                    @csrf

                    <div class="mb-3">
                        <label>Comentário:</label>
                        <textarea name="comentario" id="" rows="5" class="form-control"></textarea>
                    </div>

                    <div>
                        <input type="submit" value="Comentar" class="btn btn-primary">
                    </div>
                </form>
            </div>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Comentários:</th>
                </tr>

                @foreach ($cardapio->avaliacoes as $avaliacao)
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