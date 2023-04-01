@extends('layouts.app')
@section('content')

        <div class="container">
            <h1>Edição do comentário {{ ($comentario->id) }}</h1>

            <form method="POST" action="{{ route('avaliacao.update', $comentario->id) }}">
                @csrf
                @method('POST')

                <div>
                    <label>Comentário:</label>
                    <textarea name="avaliacao" id="" rows="5" class="form-control" value="{{ $avaliacao->comentario }}" ></textarea>
                </div>

                <div>
                    <input type="submit" name="Atualizar" class="btn btn-primary">
                </div>

            </form>
        </div>

