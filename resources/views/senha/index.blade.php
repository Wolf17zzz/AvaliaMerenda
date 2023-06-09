<html lang="en">
    <head>
        <title>Avalia Merenda</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite(['resources/sass/senha.scss'])
    </head>
    <body>
        <main class="page">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="tituloLogin"><h3>Redefir Senha</h3></div>
                        <div class="card-body">
                            @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('message') }}
                                </div>
                            @endif
                        <form action="{{ route('senha.store') }}" method="POST">
                           @csrf
                            <div class="form-group row">
                                <label for="email_address" class="col-md-2 col-form-label text-md-right">E-Mail</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4 offset-md-9">
                                <button type="submit" class="btn btn-primary">
                                    Enviar link
                                </button>
                            </div>
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
