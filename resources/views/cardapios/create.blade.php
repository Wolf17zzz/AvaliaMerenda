<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Cadastro do Cardapio</title>

        @vite(['resources/sass/cardapio.scss'])
    </head>
    <body>
        <div class="page">
            <div class="tituloCadastro">
                <h1>Novo Cardapio</h1>
            </div>
                <form method="POST" action="{{ route('cardapios.store') }}" class="formCadastro">
                    @csrf

                    <div class="mb-3">
                        <label>Dia da Semana</label>
                        <input type="text" name="dia_semana" class="form-control">

                        @error('dia_semana')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label>Prato Principal</label>
                        <input type="text" name="refeicao_principal" class="form-control">

                        @error('refeicao_principal')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label>Sobremesa</label>
                        <input type="text" name="sobremesa" class="form-control">

                        @error('sobremesa')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div>
                        <label>Bebida</label>
                        <input type="text" name="bebida" class="form-control">

                        @error('bebida')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div>
                        <label>Valor Calórico</label>
                        <input type="text" name="valor_calorico" class="form-control">

                        @error('valor_calorico')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="inputEscola">Escola:</label>
                        <select name="escolas_id" id="inputEscola" class="form-control">
                            @foreach ($escolas as $escola)
                                <option value="{{ $escola->id }}">{{ $escola->nome }}</option>
                            @endforeach
                        </select>

                        @error('escolas_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div>
                        <input type="submit" name="Salvar Cardapio" class="btn btn-primary">
                    
                    <a href=""><button class="btn btn-primary">Cardapios Salvos</button></a>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
