{{--
    Chemin :/resources/views/templates/partials/_head.blade.php
    Description: Templates par default
    Données disponible: -- // --
--}}

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Webadev">
    <title>Térésa Lupo - @yield('title')</title>
    <!-- link public -->
    <link rel="shortcut icon" type="image/png" href="favicon.ico" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
