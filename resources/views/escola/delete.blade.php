@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('escola.destroy', $escola->id) }}">
            @csrf
        <label form="">Tem certeza que deseja excluir essa escola?</label> <br />
        <input type="text" name="nome" value="{{ $escola->nome}}"> <br />
        <button>Sim</button>
    </form>
@endsection
