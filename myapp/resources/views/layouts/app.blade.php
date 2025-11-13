<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Laravel Site')</title>
</head>
<body>
    <header style="background:#222;color:white;padding:10px">
        <h1>My Laravel Website</h1>
        <nav>
            <a href="{{ route('home.page') }}">Home</a> |
            <a href="{{ route('about.page') }}">About</a> |
            <a href="{{ route('contact.page') }}">Contact</a>
        </nav>
    </header>

    <main style="padding:20px">
        @yield('content')
    </main>

    <footer style="background:#eee;padding:10px;text-align:center">
        &copy; {{ date('Y') }} Tony Nguyen
    </footer>
</body>
</html>
