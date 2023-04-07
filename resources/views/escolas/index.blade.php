@extends('layouts.app')
@section('content')

<title>Lista de Escolas</title>
    </head>
    <body>
        <div class="container">
            <h1>Lista de Escolas</h1>

            <a class="btn btn-outline-success my-2" href="{{ route('escolas.create') }}">Nova Escola</a>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>CNPJ</th>
                    <th></th>
                </tr>

                @foreach ($escolas as $escola)
                    <tr>
                        <td>{{ $escola->nome }}</td>
                        <td>{{ $escola->endereco }}</td>
                        <td>{{ $escola->cnpj }}</td>
                        <td>
                            <a class="link" href="{{ route('escolas.show', $escola->id) }}">
                                Ver
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>


    </body>
</html>