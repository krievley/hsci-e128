<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>HSCI E-128 Final Project</title>
    <link rel="stylesheet" href="{!! asset('/css/app.css') !!}"/>
    @yield('head')
</head>
<body>
    @include('partials.nav')

    <div id="app">
        <div class="container">
            @yield('content')
        </div>
    </div>

    <script type="text/javascript" src="{!! asset('/js/app.js') !!}"></script>
    @yield('footer-scripts')
</body>
</html>
