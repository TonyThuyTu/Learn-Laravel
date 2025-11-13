<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <div>
        <h1>Welcome to my Website</h1>
        <p>This Tony speaking!</p>
        <a href="{{route('about.page')}}">About</a>
        <a href="{{ route( 'contact.page' ) }}">Contact</a>
        <a href="{{ route( 'users.page' ) }}">Users</a>
    </div>
</body>
</html>