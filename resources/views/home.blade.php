@extends('layouts.app')

@section('content')
    <h1>Bem vindo</h1>

    @foreach($cardapios as $cardapio)
        <div>
            <h1>{{ $cardapio->dia_semana }}</h1>
            <h3>{{ $cardapio->refeicao_principal }}</h3>
            <h3>{{ $cardapio->sobremesa }}</h3>
            <h3>{{ $cardapio->bebida }}</h3>
            <h3>{{ $cardapio->valor_calorico }}</h3>
            <h3>{{ $cardapio->id_escolas }}</h3>

            @foreach($cardapio->avaliacoes as $avaliacao)
                <form action=""></form>
            @endforeach
        </div>
    @endforeach
@endsection