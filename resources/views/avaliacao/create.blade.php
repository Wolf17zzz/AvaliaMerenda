@extends('layouts.app')
@section('content')

        <div class="container mb-3">
            <h1>Novo comentário</h1>

            <form method="POST" action="{{ route('avaliacao.store') }}">
                @csrf

                <div class="mb-3">
                    <label>Comentário:</label>
                    <textarea name="comentario" id="" rows="5" class="form-control"></textarea>
                </div>

                <div>
                    <input type="submit" value="Comentar" class="btn btn-primary">
                </div>
            </form>
        </div>
