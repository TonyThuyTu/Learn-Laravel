<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Users</title>
</head>
<body>
    <div>
        <h1>This is Loop Users Page</h1>
        <ul>

            @foreach( $users as $user )

                <li> {{ $user }} </li>

            @endforeach

        </ul>
    </div>
</body>
</html>