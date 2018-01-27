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
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

        @stack('styles')

    </head>
    <body>

        @include('admin.blocks.header')

        <div class="container-fluid">
            <div class="row">

                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    @include('admin.blocks.sidebar')
                </nav>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                    @yield('content')
                </main>

            </div>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

        @stack('scripts')

    </body>
</html>
