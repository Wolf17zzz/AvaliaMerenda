@extends('layouts.app')
@section('content')

<title>Escola #{{ $escola->id }}</title>
    </head>
    <body>
        <div class="container">
            
            <h1>Nome {{ $escola->nome }}</h1>

            <h2>Endereço {{ $escola->endereco }}</h2>

            <h3>CNPJ {{ $escola->cnpj }}</h3>

        

            <a class="btn btn-light" href="{{ route('escolas.index') }}">Voltar a lista</a>
            <a class="btn btn-warning" href="{{ route('escolas.edit', $escola->id) }}">Editar</a>

            <form method="POST" action="{{ route('escolas.destroy', $escola->id) }}">
                @csrf
                @method('DELETE')

                <input type="submit" value="Excluir Escola" class="btn btn-danger">
            </form>
        </div>
    </body>
</html>