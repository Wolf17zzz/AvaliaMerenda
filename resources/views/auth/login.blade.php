@extends('layouts.app')
@section('content')

    

    <div class="container">
        <div class="row">

            <div class="col-md-4 offset-md-4">
                <div class="card form-holder">
                    <div class="card-body">
                        <h1>Login</h1>

                        @if (Session::has('error'))
                            <p class="text-danger">{{ Session::get('error') }}</p>
                        @endif
                        @if (Session::has('success'))
                            <p class="text-success">{{ Session::get('success') }}</p>
                        @endif

                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" name="e-mail" class="form-control" placeholder="E-mail">
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->firts('email') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Senha</label>
                                <input type="password" name="senha" class="form-control" placeholder="Senha">
                                @if ($errors->has('senha'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            
                            <div class="row">
                                <div class="col-8 text-left">
                                    <a href="#" class="btn btn-link">Esqueceu a senha?</a>
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