@extends('layouts.app')

@section('content')
    <style>
        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 25px;
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }
    </style>

    @foreach($cardapios as $cardapio)
        <div>
            <h1>{{ $cardapio->dia_semana }}</h1>
            <h3>{{ $cardapio->refeicao_principal }}</h3>
            <h3>{{ $cardapio->sobremesa }}</h3>
            <h3>{{ $cardapio->bebida }}</h3>
            <h3>{{ $cardapio->valor_calorico }}</h3>
            <h3>{{ $cardapio->id_escolas }}</h3>

            <div class="p-4 border rounded m-3">
                <form method="POST" action="{{  route('avaliacao.store') }}">
                    <input type="hidden" name="cardapio_id" value="{{ $cardapio->id }}">

                    @csrf
                    <div class="form-group">
                        <label for="avaliacao">Comentário:</label>
                        <textarea class="form-control" id="avaliacao" name="comentario"></textarea>
                    </div>

                    <div class="mb-3">
                        <label>Nota:</label>
                        <input type="range" min="0" max="5" value="0" class="slider" id="myRange" name="nota">
                        <div class="d-flex flex-row justify-content-between">
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
                {{ $avaliacao->usuario->nome }}:
                {{ $avaliacao->comentario }} <br>
            @endforeach
        </div>
        @endforeach
@endsection
