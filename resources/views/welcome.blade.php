<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Poppy's Balloons! Balloon Parties and Face Painting</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    </head>
    <body>
        @include('partials.navbar')
        @include('partials.call-to-action')
        @include('partials.portfolio')
        @include('partials.services')
        @include('partials.about-me')
        @include('partials.contact')
  
    </body>
</html>
