<html lang="en">
    <head>
        <title>Avalia Merenda</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite(['resources/sass/login.scss'])
    </head>
    <body>
    <div class="page">
        <form method="POST" action="{{ route('autenticacao.store') }}" class="formLogin">
            @csrf

            <h1>Login</h1>
            <p>Digite os seus dados de acesso nos campos abaixo.</p>
            <label for="email">E-mail</label>
            <input type="email" name="email" placeholder="Digite seu e-mail" autofocus="true" />
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="password">Senha</label>
            <input type="password" name="senha" placeholder="Digite sua senha" />

            <a href="/">Esqueci minha senha</a>
            <p>Ainda não tem uma conta? <a href="usuarios/novo">Cadastre-se</a></p>

            <input type="submit" value="Acessar" class="btn btn-primary" />


        </form>
    </div>
    </body>
</html>
