<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Cadastro de Usuários</title>

        @vite(['resources/sass/cadastro.scsss'])
    </head>
    <body>
        <div class="container mb-3">
            <h1>Novo Usuário</h1>
            <div class="form">
                <form action="{{route('usuarios.store')}}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNome">Nome:</label>
                            <input type="text" name="nome" value="{{ old('nome') }}" class="form-control" id="inputnome" placeholder="Seu Nome">

                            @error('nome')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputCpf">CPF:</label>
                            <input type="text" name="cpf" value="{{ old('cpf') }}" class="form-control" id="inputCpf" placeholder="000.000.000-00">

                            @error('cpf')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    </div>

                    <div class="form-group">
                        <label for="inputEmail">Email:</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="inputEmail" placeholder="exemplo@gmail.com">

                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                    <div class="form-group">
                        <label for="inputSenha">Senha:</label>
                        <input type="password" name="senha" value="{{ old('senha') }}" class="form-control" id="inputSenha" placeholder="Digite sua senha">

                        @error('senha')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                    <div class="form-group">
                        <label for="inputSenha">Confirme sua senha:</label>
                        <input type="password" name="senha_confirmation" value="{{ old('senha') }}" class="form-control" id="inputSenha" placeholder="Confirme sua senha">

                        @error('senha')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                    <div class="form-group">
                        <label for="inputEscola">Escola:</label>
                        <select name="escola_id" id="inputEscola" class="form-control">
                            @foreach ($escolas as $escola)
                                <option value="{{ $escola->id }}">{{ $escola->nome }}</option>
                            @endforeach
                        </select>

                        @error('escola_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <input type="submit" class="btn btn-primary" value="Cadastrar">
                </form>
            </div>
        </div>
    </body>
</html>

