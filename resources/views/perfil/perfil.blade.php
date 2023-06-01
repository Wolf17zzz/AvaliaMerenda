@extends('layouts.app')

@section('content')

@vite(['resources/sass/home.scss'])

    <h1 class="display-1">
        {{ $usuario->nome }}
    </h1>

@endsection

 