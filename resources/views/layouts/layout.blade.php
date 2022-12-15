<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        @vite('resources/css/app.css')
        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">
        <script src="//unpkg.com/alpinejs" defer></script>
    </head>
    <body>

        @yield('content')

        <footer class="p-5 bg-[#eee] text-center">
          Copyright 2022 Pizza House
        </footer>

    </body>
</html>