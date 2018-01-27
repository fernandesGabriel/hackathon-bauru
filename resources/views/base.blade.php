<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Hackathon') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        @stack('styles')

    </head>
    <body class="@yield('body-class')">

        <header class="container">
            @include('blocks.header')
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="bg-slider bg-primary inverse">
            @include('blocks.footer')
        </footer>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

        @stack('scripts')

    </body>
</html>
