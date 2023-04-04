<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Escola</title>
    </head>
    <body>
        <div class="container">
        <h1>Nome: {{$escola->nome}}</h1>
        <h2>Endereço: {{$escola->endereco}}</h2>
        <h3>CNPJ: {{$escola->cnpj}}</h3>
        </div>
    </body>
</html>
