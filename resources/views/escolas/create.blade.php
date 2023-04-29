@extends('layouts.app')
@section('content')

        <title>Cadastrar Escola </title>
    </head>
    <body>
        <div class="container mb-3">
            <h1>Nova Escola</h1>

            <form method="POST" action="{{ route('escolas.store') }}">
                @csrf

                <div class="mb-3">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Endereço</label>
                    <input type="text" name="endereco" class="form-control">
                </div>

                <div class="mb-3">
                    <label>CNPJ</label>
                    <input type="number" name="cnpj" class="form-control">
                </div>

                <div>
                    <input type="submit" value="Salvar Escola" class="btn btn-primary">
                </div>
            </form>
        </div>
    </body>
</html>
