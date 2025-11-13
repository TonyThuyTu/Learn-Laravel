<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Page')</title>
</head>
<body>

    <header>

        <h1>Hello Tony Nguyen</h1>

        <nav>
            <a href=" {{ route('home.page') }} ">Home</a>
            <a href=" {{ route('about.page') }} ">About</a>
            <a href=" {{ route('contact.page') }} ">Contact</a>
        </nav>

    </header>

    <main>

        @yield('content')

    </main>

    <footer>

        &copy; {{ date('Y') }} Tony Nguyen

    </footer>

</body>
</html>