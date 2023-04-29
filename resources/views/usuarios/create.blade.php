<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Cadastro de Usuários</title>
    </head>
    <body>
        <div class="container mb-3">
            <h1>Novo Usuário</h1>

            <form method="POST" action="{{ route('usuarios.store') }}">
                @csrf

                <div class="mb-3">
                    <label>Nome:</label>
                    <input type="text" name="nome" class="form-control">
                </div>

                <div class="mb-3">
                    <label>CPF:</label>
                    <input type="text" name="cpf" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Email:</label>
                    <input type="text" name="email" class="form-control">
                </div>

                <div>
                    <label>Senha:</label>
                    <input type="text" name="senha" class="form-control">
                </div>

                <div>
                    <input type="submit" name="Salvar Usuario" class="btn btn-primary">
                </div>

            </form>
        </div>
    </body>
</html>
