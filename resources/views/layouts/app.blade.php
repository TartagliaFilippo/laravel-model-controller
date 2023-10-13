<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-page')</title>

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>
    <header>
        @include('partials._navbar')
    </header>
    <main>@yield('main-content')</main>
    <footer>footer...</footer>
</body>

</html>
