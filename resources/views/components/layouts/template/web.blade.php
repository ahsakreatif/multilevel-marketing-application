<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.header')
    </head>
    <body class="min-h-screen bg-white">
        @include('partials.navbar')
        {{ $slot }}
        @include('partials.footer')
        @include('partials.back-to-top')

        @fluxScripts
    </body>
</html>
