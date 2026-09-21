<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>
        @yield('title', 'Admin CMS | Urban Roads SACCO')
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-[#F7F8F7] text-[#252525]">

    {{-- CMS NAVBAR --}}
    <x-admin.navbar />

    {{-- CMS CONTENT --}}
    <main>

        @yield('content')

    </main>

</body>

</html>
