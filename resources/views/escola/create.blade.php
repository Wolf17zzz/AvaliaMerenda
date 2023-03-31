@extends('layouts.app')
@section('content')



    <div class="container">
        <div class="row">

            <div class="col-md-4 offset-md-4">
                <div class="card form-holder">
                    <div class="card-body">
                        <h1>CadastroEscola</h1>

                        @if (Session::has('error'))
                            <p class="text-danger">{{ Session::get('error') }}</p>
                        @endif
                        <form action="{{ route('escolas.create') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label>Nome da Escola</label>
                                <input type="text" name="nome" class="form-control" placeholder="nomeEscola">
                                @if ($errors->has('nome'))
                                    <p class="text-danger">{{ $errors->first('nome') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Endereço</label>
                                <input type="text" name="endereco" class="form-control" placeholder="endereco">
                                @if ($errors->has('nome'))
                                    <p class="text-danger">{{ $errors->first('nome') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>CNPJ</label>
                                <input type="string" name="cnpj" class="form-control" placeholder="cnpj">
                                @if ($errors->has('nome'))
                                    <p class="text-danger">{{ $errors->first('nome') }}</p>
                                @endif
                            </div>

                                <div class="col-4 text-rigth">
                                    <input type="submit" class="btn btn-primary" value=" Cadastrar ">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
