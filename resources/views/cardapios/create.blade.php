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
                
                <div class="mb-3">
                    <label>Prato Principal</label>
                    <input type="text" name="refeicao_principal" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Sobremesa</label>
                    <input type="text" name="sobremesa" class="form-control">
                </div>

                <div>
                    <label>Bebida</label>
                    <input type="text" name="bebida" class="form-control">
                </div>

                <div>
                    <label>Valor Calórico</label>
                    <input type="text" name="valor_calorico" class="form-control">
                </div>

                <div>
                    <input type="submit" name="Salvar Cardapio" class="btn btn-primary">
                </div>

            </form>
        </div>
    </body>
</html>