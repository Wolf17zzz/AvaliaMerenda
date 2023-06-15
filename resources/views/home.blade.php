@extends('layouts.app')

@section('content')

@vite(['resources/sass/home.scss'])
@vite(['resources/sass/estrelas.scss'])

    <h1 class=text-center style="font-size: 70px;">
        {{ Auth::user()->escola->nome }}
    </h1>

    @foreach($cardapios as $index => $cardapio)
        <div class="cardapio-container font-bold">
            <div class="d-flex gap-3 flex-row justify-content-between">
                <div class="cardapio w-50 d-flex flex-column justify-content-around">
                    <div class="dados">
                        <h1 class="display-3" style="font-size: 50px;">{{ $cardapio->dia_semana }}</h1>
                        <h4>Refeição principal: {{ $cardapio->refeicao_principal }}</h4>
                        <h4>Fruta: {{ $cardapio->sobremesa }}</h4>
                        <h4>Bebida: {{ $cardapio->bebida }}</h4>
                        <h4>Valor calórico: {{ $cardapio->valor_calorico }}</h4>
                    </div>
                    <div class=" rounded mt-4">
                        <form method="POST" action="{{  route('avaliacao.store') }}">
                            @csrf
                            <input type="hidden" name="cardapio_id" value="{{ $cardapio->id }}">
                            <div class="campo-comentario">
                                <label for="avaliacao">Comentário:</label>
                                <textarea class="form-control" id="avaliacao" name="comentario"></textarea>
                            </div>
                            <div class="nota-container nota-scale">
                                <label>Nota:</label>
                                <div type="range" min="1" max="5" value="0" class="rating">
                                    <input type="radio" id="star1_{{ $index }}" name="nota" value="5">
                                    <label for="star1_{{ $index }}"></label>
                                    <input type="radio" id="star2_{{ $index }}" name="nota" value="4">
                                    <label for="star2_{{ $index }}"></label>
                                    <input type="radio" id="star3_{{ $index }}" name="nota" value="3">
                                    <label for="star3_{{ $index }}"></label>
                                    <input type="radio" id="star4_{{ $index }}" name="nota" value="2">
                                    <label for="star4_{{ $index }}"></label>
                                    <input type="radio" id="star5_{{ $index }}" name="nota" value="1">
                                    <label for="star5_{{ $index }}"></label>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-3">
                                <button type="submit" class="btn btn-primary">Publicar avaliação</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="w-50">
                    <div class="display-3 text-center" style="font-size: 45px;">Nota Geral {{ $cardapio->nota }}</div>
                    <div class="comentarios border rounded p-3">
                        <div class="comment-container">
                            <h1 class="mb-3">Comentários</h1>
                            <hr>
                            <div class="comentarios-feitos">
                                @foreach($cardapio->avaliacoes as $avaliacao)
                                    <div>
                                        <h6 style="font-size: 15px;"><p>
                                            {{ $avaliacao->usuario->nome }}:
                                            {{ $avaliacao->comentario }}
                                        </p></h6>
                                    </div>
                                    <hr>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection




