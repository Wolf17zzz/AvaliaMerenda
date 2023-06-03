@extends('layouts.app')

@section('content')

@vite(['resources/sass/home.scss'])

    <h1 class="text-center display-1">
        {{ Auth::user()->escola->nome }}
    </h1>

    @foreach($cardapios as $cardapio)
        <div class="cardapio-container">
            <div class="d-flex gap-3 flex-row justify-content-between">
                <div class="cardapio w-50 d-flex flex-column justify-content-around">
                    <div class="dados">
                        <h1 class="display-3">{{ $cardapio->dia_semana }}</h1>
                        <h4>{{ $cardapio->refeicao_principal }}</h4>
                        <h4>{{ $cardapio->sobremesa }}</h4>
                        <h4>{{ $cardapio->bebida }}</h4>
                        <h4>{{ $cardapio->valor_calorico }}</h4>
                    </div>

                    <div class="border p-3 rounded mt-4">
                        <form method="POST" action="{{  route('avaliacao.store') }}">
                            @csrf
                            <input type="hidden" name="cardapio_id" value="{{ $cardapio->id }}">

                            <div class="form-group">
                                <label for="avaliacao">Comentário:</label>
                                <textarea class="form-control" id="avaliacao" name="comentario"></textarea>
                            </div>

                            <div class="nota-container nota-scale">
                                <label>Nota:</label>
                                <input type="range" min="0" max="5" value="0" class="slider" id="myRange" name="nota">
                                <div class="nota-scale">
                                    <p>⭐</p>
                                    <p>⭐</p>
                                    <p>⭐</p>
                                    <p>⭐</p>
                                    <p>⭐</p>
                                    <p>⭐</p>
                                </div>
                            </div>

                            <div class="d-flex justify-content-end mt-3">
                                <button type="submit" class="btn btn-primary">Publicar avaliação</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="w-50">
                    <div class="p-4 my-2 display-3 border rounded text-center">Nota Geral {{ $cardapio->nota }}</div>

                    <div class="comentarios border rounded p-3">
                        <div class="comment-container">
                            <h1 class="mb-3">Comentários</h1>
    
                            <div class="comentarios-feitos">
                                @foreach($cardapio->avaliacoes as $avaliacao)
                                    <div>
                                        <h6>{{ $avaliacao->usuario->nome }}</h6>
    
                                        <p>
                                            {{ $avaliacao->comentario }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
        
@endsection

