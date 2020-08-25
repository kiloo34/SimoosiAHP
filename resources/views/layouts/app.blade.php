<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SimooSi || {{ strpos(url()->current(), 'register') ==  false ? 'Login' : 'Register' }}</title>

        <!-- Scripts -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/color_skins.css') }}">

        <!-- Styles -->
        <link href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    </head>

    <body>
        {{-- <x-preloader /> --}}
        <section id="wrapper">
            <div class="login-register"
                style="background-image:url({{asset('images/background/login-register.jpg')}});">
                @yield('content')
            </div>
        </section>
    </body>

</html>
