<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hexlet Blog - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="csrf-param" content="_token" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <nav>
            <a href="{{ route('main') }}">Главная</a>
            <a href="{{ route('page.about') }}">About</a>
            <a href="{{ route('articles.index') }}">Articles</a>
        </nav>

        @if (Session::has('flash_message'))

            <div class="alert alert-success">{{ Session::get('flash_message') }}</div>

        @endif

        <div class="container mt-4">
            <h1>@yield('header')</h1>
            <div>
                @yield('content')
            </div>
        </div>
    </body>
</html>