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
            <div>
                <label>Suas Avaliações:</label>
                <div class="comentarios border rounded p-3">
                    @foreach ($usuario->avaliacoes as $avaliacao)
                        <div>
                            <p><h5>Avaliação: {{ $avaliacao->comentario }} - Nota:{{ $avaliacao->nota }}</h5></p>
                        </div>
                    @endforeach
                </div>
            </div>
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
