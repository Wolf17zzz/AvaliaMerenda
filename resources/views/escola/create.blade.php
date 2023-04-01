@extends('layouts.app')
@section('content')



    <div class="container">
        <div class="row">

            <div class="col-md-4 offset-md-4">
                <div class="card form-holder">
                    <div class="card-body">
                        <h1>Cadastrar Escola</h1>

                        @if (Session::has('error'))
                            <p class="text-danger">{{ Session::get('error') }}</p>
                        @endif

                        <form action="{{ route('escola.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label>Nome da Escola</label>
                                <input type="text" name="nome" class="form-control" >
                                @if ($errors->has('nome'))
                                    <p class="text-danger">{{ $errors->first('nome') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Endereço</label>
                                <input type="text" name="endereco" class="form-control" >
                                @if ($errors->has('endereco'))
                                    <p class="text-danger">{{ $errors->first('endereco') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>CNPJ</label>
                                <input type="string" name="cnpj" class="form-control" >
                                @if ($errors->has('cnpj'))
                                    <p class="text-danger">{{ $errors->first('cnpj') }}</p>
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
