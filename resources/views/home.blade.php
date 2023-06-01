@extends('layouts.app')

@section('content')

@vite(['resources/sass/home.scss'])

    <h1 class="text-center display-1">
        {{ Auth::user()->escola->nome }}
    </h1>

    @foreach($cardapios as $cardapio)
        <div class="cardapio-container">
            <h1>{{ $cardapio->dia_semana }}</h1>
            <h4>{{ $cardapio->refeicao_principal }}</h4>
            <h4>{{ $cardapio->sobremesa }}</h4>
            <h4>{{ $cardapio->bebida }}</h4>
            <h4>{{ $cardapio->valor_calorico }}</h4>
            <h3>{{ $cardapio->id_escolas }}</h3>

            <h3>{{ $cardapio->nota }}</h3>

            <div class="nota-scale">
                <form method="POST" action="{{  route('avaliacao.store') }}">
                    <input type="hidden" name="cardapio_id" value="{{ $cardapio->id }}">

                    @csrf
                    <div class="form-group">
                        <label for="avaliacao">Comentário:</label>
                        <textarea class="form-control" id="avaliacao" name="comentario"></textarea>
                    </div>

                    <div class="nota-container">
                        <label>Nota:</label>
                        <input type="range" min="0" max="5" value="0" class="slider" id="myRange" name="nota">
                        <div class="nota-scale">
                            <p>0</p>
                            <p>1</p>
                            <p>2</p>
                            <p>3</p>
                            <p>4</p>
                            <p>5</p>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Publicar comentário</button>
                </form>
            </div>


            @foreach($cardapio->avaliacoes as $avaliacao)
            <h6>{{ $avaliacao->usuario->nome }}:
                {{ $avaliacao->comentario }} <br> </h6>
            @endforeach
        </div>
        @endforeach
@endsection

 