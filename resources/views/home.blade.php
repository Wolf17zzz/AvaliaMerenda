@extends('layouts.app')

@section('content')


    @foreach($cardapios as $cardapio)
        <div>
            <h1>{{ $cardapio->dia_semana }}</h1>
            <h4>{{ $cardapio->refeicao_principal }}</h4>
            <h4>{{ $cardapio->sobremesa }}</h4>
            <h4>{{ $cardapio->bebida }}</h4>
            <h4>{{ $cardapio->valor_calorico }}</h4>
            <h3>{{ $cardapio->id_escolas }}</h3>

            <form method="POST" action="{{  route('avaliacao.store') }}">
                <input type="hidden" name="cardapio_id" value="{{ $cardapio->id }}">

                @csrf
                <div class="form-group">
                    <label for="avaliacao">Comentário:</label>
                    <textarea class="form-control" id="avaliacao" name="comentario"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Publicar comentário</button>
            </form>

            @foreach($cardapio->avaliacoes as $avaliacao)
                <h6>{{ $avaliacao->usuario->nome }}:
                {{ $avaliacao->comentario }} <br> </h6>
            @endforeach
        </div>
        @endforeach
@endsection
