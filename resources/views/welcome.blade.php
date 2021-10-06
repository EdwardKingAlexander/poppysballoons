<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow" />
        <meta name="description" content="Poppy's Balloons and facepainting for birthdays and parties">
        <meta name="keywords" content="facepainting, face painting, 
        facepainting in Colorado Springs, Colorado Springs face painting, 
        balloon animals, Colorado Springs balloon animals,
        birthday parties in Colorado Springs
        party services in Colorado Springs" >

        <title>{{ __('lang.title') }}</title>
        <link rel="preconnect" href="https://fonts.googleapis.com" defer>
        <link rel="preconnect" href="https://fonts.gstatic.com" defer crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Carattere&family=Roboto&display=swap" rel="stylesheet">
        {!! RecaptchaV3::initJs() !!}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" defer>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-PESEZD21H7"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-PESEZD21H7');
        </script>
        

    </head>
    <body>
    
        <main>
            @include('partials.navbar')
            @include('partials.call-to-action')
            @include('partials.services')
            @include('partials.portfolio')
            @include('partials.about-me')
            @include('partials.contact')
        </main>
    </body>
</html>
