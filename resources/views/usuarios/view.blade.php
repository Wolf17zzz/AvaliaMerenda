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
            <h1>Nome: {{ $usuarios->nome }}</h1>

            <h3>CPF: {{ $usuarios->cpf }}</h3>

            <h3>Email: {{ $usuarios->email }}</h3>

            <h3>Senha: {{ $usuarios->senha }}</h3>


                <br>
                <br>
            <a  class="btn btn-primary" href="{{ route('usuarios.index') }}">Voltar para usuarios</a>
                <br>
                <br>
            <a  class="btn btn-primary" href="{{ route('usuarios.edit', $usuarios->id) }}">Editar usuarios</a>
                <br>
                <br>
            <form method="POST" action="{{ route('usuarios.destroy', $usuarios->id) }}">
                @csrf 
                @method('DELETE')
                
                <input type="submit" value="Excluir usuarios" class="btn btn-danger">
            </form>
        </div>


    </body>
</html>