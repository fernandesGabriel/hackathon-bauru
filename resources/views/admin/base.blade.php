<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Hackathon') }} | @lang('Dashboard')</title>

        <!-- Styles -->
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

        @stack('styles')

    </head>
    <body>

        <header>
            @include('admin.blocks.header')
        </header>

        <div class="container-fluid">
            <div class="row">

                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    @include('admin.blocks.sidebar')
                </nav>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                    <div class="admin-content">
                        @yield('content')
                    </div>
                </main>

            </div>
        </div>

        <footer class="mb-5"></footer>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/admin.js') }}"></script>

        @stack('scripts')

    </body>
</html>
