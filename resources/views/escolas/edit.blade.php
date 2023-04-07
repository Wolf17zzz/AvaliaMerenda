@extends('layouts.app')
@section('content')


<title>Escola #{{ $escola->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>Editar Escola {{ $escola->id }}</h1>

            <form method="POST" action="{{ route('escolas.update', $escola->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" value="{{ $escola->nome }}">
                </div>

                <div class="mb-3">
                    <label>Endereço</label>
                    <input type="text" name="endereco" class="form-control" value="{{ $escola->endereco }}">
                </div>

                <div class="mb-3">
                    <label>CNPJ</label>
                    <input type="number" name="cnpj" class="form-control" value="{{ $escola->cnpj }}">
                </div>

                <div>
                    <input type="submit" value="Atualizar Escola" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>