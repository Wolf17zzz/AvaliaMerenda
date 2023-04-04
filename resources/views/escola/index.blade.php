@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Lista de Escolas</h1>

    <a class="btn btn-outline-success my-2" href="{{ route('escola.create') }}">Nova Escola</a>

    <table class="table table-hover table-bordered table-primary">
        <tr class="table-dark">
            <th>Nome</th>
            <th>Endereço</th>
            <th>CNPJ</th>
            <th></th>
        </tr>

        @foreach ($escola as $escola)
            <tr>
                <td>{{ $escola->nome }}</td>
                <td>{{ $escola->endereco }}</td>
                <td>{{ $escola->cnpj }}</td>
                <td>
                    <a class="link" href="{{ route('escola.show', $escola->id) }}">
                        Ver
                    </a>
                </td>
            </tr>
            @endforeach
    </table>
</div>
@endsection
