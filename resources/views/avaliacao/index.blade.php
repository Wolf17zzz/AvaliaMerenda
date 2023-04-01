@extends('layouts.app')
@section('content')

        <div class="container">
            <h1>Lista de avaliacao</h1>

            <a class="btn btn-outline-success my-2" href="{{ route('avaliacao.create') }}">Nova Avaliacao</a>

            <table class="table table-hover table-bordered table-primary">
                <tr class="table-dark">
                    <th>Comentários:</th>
                </tr>

                @foreach ($avaliacao as $avaliacao)
                    <tr>
                        <td>{{ $avaliacao->comentario}}</td>
                        <td>
                            <a class="link" href="{{ route('avaliacao.show', $avaliacao->id) }}">
                                Ver
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
@endsection

