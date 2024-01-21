<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titolo')</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    @include('partials.header')
    <main>
        @yield('contenuto')
    </main>
    @include('partials.footer')
</body>

</html>