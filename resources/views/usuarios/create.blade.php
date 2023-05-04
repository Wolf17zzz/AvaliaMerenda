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
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputNome">Nome:</label>
                    <input type="nome" class="form-control" id="inputnome" placeholder="Seu Nome">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputCpf">CPF:</label>
                    <input type="cpf" class="form-control" id="inputCpf" placeholder="000.000.000-00">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email:</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="exemplo@gmail.com">
                </div>
                <div class="form-group">
                    <label for="inputSenha">Senha:</label>
                    <input type="senha" class="form-control" id="inputSenha" placeholder="Digite sua senha">
                </div>
                <div class="form-group">
                    <label for="inputSenha">Confirme sua senha:</label>
                    <input type="senha" class="form-control" id="inputSenha" placeholder="Confirme sua senha">
                </div>
                    <div class="form-group col-md-4">
                <label for="inputEscola">Escola:</label>
                <select id="inputEscola" class="form-control">
                    <option selected>Selecione a escola</option>
                    <option>Aimone Sala</option>
                    <option>Etec</option>
                    <option>João Arruda Brasil</option>
                    <option>Waldemar Queiroz</option>
                </select>
                </div>
                </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
        </div>
    </body>
</html>

