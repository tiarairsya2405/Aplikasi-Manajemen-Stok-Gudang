<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        @include('components.header')
    </header>

    <main class="container mx-auto p-4">
        @yield('content')
    </main>

    <footer>
        @include('components.footer')
    </footer>
</body>

</html>