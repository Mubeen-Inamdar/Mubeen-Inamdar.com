<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ config('app.name') }}</title>
        <meta name="description" content="Bespoke web applications from Leeds.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{-- Favicons --}}
        @include('layouts.partials.favicons')

        {{-- Fonts --}}
        <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">

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
            @include('layouts.partials.footer')

            {{-- Scroll to Top --}}
            <scroll-to-top></scroll-to-top>
        </div>

        {{-- Google Analytics --}}
        @include('layouts.partials.analytics')

        {{-- Scripts --}}
        <script src="/js/app.js"></script>
        <script src="/js/materialize.js"></script>
    </body>
</html>
