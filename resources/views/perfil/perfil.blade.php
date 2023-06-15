@extends('layouts.app')

@section('content')
    @vite(['resources/sass/usuario.scss'])

    <!DOCTYPE html>
    <html>

    <head>
        <title>Perfil do Usuário</title>

    </head>

    <body>
        <div class="profile-container">
            <div class="profile-info">
                <h1>Nome: {{ $usuario->nome }} </h1>
                <h2 class="label">Email: {{ $usuario->email }}</h2>
                <h2 class="label">Escola: {{ $usuario->escola->nome }}</h2>
            </div>
            <div class="button-container">
                <button id="btnIrParaLogin" class="secondary">Sair</button>
            </div>

            @foreach ($usuario->avaliacoes as $avaliacao)
                <div>
                    <h3>{{ $avaliacao->comentario }}</h3>
                    <h3>{{ $avaliacao->nota }}</h3>
                </div>
            @endforeach
        </div>
    </body>

    </html>


    <script>
        document.getElementById('btnIrParaLogin').addEventListener('click', function() {
            window.location.href = "entrar";
        });
    </script>

    <style>
        .button-container {
            position: fixed;
            bottom: 0;
            right: 0;
            margin: 20px;
        }

        .button-container button {
            margin: 0 5px;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .button-container button.secondary {
            background-color: #6c757d;
            color: #fff;
        }
    </style>
@endsection
