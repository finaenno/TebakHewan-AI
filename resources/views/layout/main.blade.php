<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tebak Hewan</title>
    <link rel="stylesheet" href="../css/layout.css">
</head>
<body>
    <nav>
        {{-- @yield('layout.navbar') --}}
        <ul>
            <li><a class="nav-link text-center @yield('home')" href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="https://wa.me/6289655776783">Contact</a></li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        @include('layout.footer')
    </footer>
</body>
</html>