@extends('layouts.app')
@section('content')



    <div class="container">
        <div class="row">

            <div class="col-md-4 offset-md-4">
                <div class="card form-holder">
                    <div class="card-body">
                        <h1>Cadastro</h1>

                        @if (Session::has('error'))
                            <p class="text-danger">{{ Session::get('error') }}</p>
                        @endif

                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" name="nome" class="form-control" placeholder="nome">
                                @if ($errors->has('nome'))
                                    <p class="text-danger">{{ $errors->first('nome') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" name="email" class="form-control" placeholder="E-mail">
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif                                
                            </div>

                            <div class="form-group">
                                <label>Senha</label>
                                <input type="password" name="senha" class="form-control" placeholder="Senha">
                                @if ($errors->has('senha'))
                                    <p class="text-danger">{{ $errors->first('senha') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Confirmar Senha</label>
                                <input type="password" name="senha_confirmar" class="form-control" placeholder="Confirmar Senha">
                            </div>

                            <div class="row">
                                <div class="col-8 text-left">
                                    <a href="#" class="btn btn-link">esqueceu a senha?</a>
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