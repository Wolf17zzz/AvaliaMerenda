<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Usuário #{{ $usuarios->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>Edição de Usuário {{ ($usuarios->id) }}</h1>

            <form method="POST" action="{{ route('usuarios.update', $usuarios->id) }}">
                @csrf
                @method('PUT')

                <div>
                    <label>Nome:</label>
                    <input type="text" name="dia_semana" value="{{ $usuarios->nome }}">
                </div>

                <div>
                    <label>CPF:</label>
                    <input type="text" name="refeicao_principal" value="{{ $usuarios->cpf }}">
                </div>

                <div>
                    <label>Email:</label>
                    <input type="text" name="sobremesa" value="{{ $usuarios->email }}">
                </div>
                
                <div>
                    <label>Senha:</label>
                    <input type="text" name="bebida" value="{{ $usuarios->senha }}">
                </div>

                <div>
                    <input type="submit" name="Atualizar Usuario" class="btn btn-primary">
                </div>

            </form>
        </div>
    </body>

</html>