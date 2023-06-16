@extends('layouts.app')

@section('content')
    @vite(['resources/sass/usuario.scss'])


<!DOCTYPE html>
<html>
    <head>
        <title>Perfil do Usuário</title>
    </head>

    <body>
        <div class="div-superior">
            <div class="div-superior">
                <h1>Nome: {{ $usuario->nome }} </h1>
                <h2 class="label">Email: {{ $usuario->email }}</h2>
                <h2 class="label">Escola: {{ $usuario->escola->nome }}</h2>
            </div>
        </div>
        <div class="avaliacoes-container">
            <h3>Suas Avaliações:</h3>
            <div class="comentarios border rounded p-1">
                <div class="comentarios-feitos">
                    @foreach ($usuario->avaliacoes as $avaliacao)
                        <div class="avaliacao">
                            <h5>({{ $avaliacao->cardapio->dia_semana }})  Avaliação: {{ $avaliacao->comentario }} - Nota:{{ $avaliacao->nota }}</h5><hr>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
            <div class="button-container">
                @if ($usuario->super_admin)
                    <button id="btnCadastrarCardapio" class="secondary">Cadastrar Cardápios</button>
                    <button id="btnCadastrarEscola" class="secondary">Cadastrar Escolas</button>
                @endif
                <button id="btnIrParaLogin" class="secondary">Sair</button>
            </div>
        </div>
    </body>
</html>




    <script>
        document.getElementById('btnIrParaLogin').addEventListener('click', function() {
            window.location.href = "entrar";
        });
        document.getElementById('btnCadastrarCardapio').addEventListener('click', function() {
            window.location.href = "cardapios/novo";
        });
        document.getElementById('btnCadastrarEscola').addEventListener('click', function() {
            window.location.href = "escolas/novo";
        });
    </script>
@endsection
