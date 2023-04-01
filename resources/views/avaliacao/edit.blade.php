@extends('layouts.app')
@section('content')

        <div class="container">
            <h1>Edição do comentário #{{ ($avaliacao->id) }}</h1>

            <form method="POST" action="{{ route('avaliacao.update', $avaliacao->id) }}">
                @csrf
                @method('PUT')

                <div>
                    <label>Comentário:</label>
                    <textarea name="comentario" id="" rows="5" class="form-control" value="{{ $avaliacao->comentario }}" ></textarea>
                </div>

                <div>
                    <input type="submit" name="Atualizar" class="btn btn-primary">
                </div>

            </form>
        </div>

