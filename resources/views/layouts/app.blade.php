<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="Viewport" content="width=device-width, initial-scale=1.0">

        <title>
            @yield('title','Urban Roads SACCO')
        </title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white text-gray-900 antialised">
        @include('components.navbar')

        <main>
            @yield('content')
        </main>

        @include('components.footer')
    </body>

</html>
