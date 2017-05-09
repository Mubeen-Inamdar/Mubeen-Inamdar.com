<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title') | Mubeen-Inamdar.com</title>
        <meta name="description" content="Portfolio and information about Mubeen Inamdar.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{-- Favicons --}}

        {{-- Fonts --}}
        <link rel="stylesheet" href="http://fonts.googleapis.com/icon?family=Material+Icons">

        {{-- Stylesheets --}}
        <link rel="stylesheet" href="/css/app.css">

        {{-- CSRF Token --}}
        @include('layouts.partials.csrf-token')
    </head>
    <body>
        {{-- Update Browser Message --}}
        @include('layouts.partials.update-browser')

        {{-- Content --}}
        <div id="app">
            @include('layouts.partials.nav')
            @yield('content')
        </div>

        {{-- Google Analytics --}}
        @include('layouts.partials.analytics')

        {{-- Scripts --}}
        <script src="/js/app.js"></script>
        <script src="/js/materialize.js"></script>
        @yield('js')
    </body>
</html>
