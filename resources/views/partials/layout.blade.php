<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        @include('partials.style')

    </head>
    <body>
        @include('partials.header')
        @yield('main')
        @include('partials.footer')
        
    </body>
</html>
<!-- Creiamo un layout base da estendere in due pagine del nostro sito.
Nel layout includiamo un header e un footer -->
