<html lang="en">
    <head>
        <title>Avalia Merenda</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/sass/admin.scss', 'resources/js/app.js'])

        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @include('layouts.navigation')

        @yield('content')
    </body>
</html>
