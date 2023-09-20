<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Lakitas Proyección">
        <meta name="author" content="Sebastián Aguilera <sebastian@procodigo.cl>">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

        <title>@yield('title_1', config('app.name')) - @yield('title_2', '')</title>

        @yield('pre_css')

        <link rel="stylesheet" href="{{ mix('css/core.css') }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @yield('css')
    </head>
    <body>

        @include('layout.menu')

        <main>
            @yield('content')
        </main>

        @include('layout.footer')

        @yield('pre_js')

        <script src="{{ mix('js/core.js') }}"></script>

        @yield('js')
    </body>
</html>
