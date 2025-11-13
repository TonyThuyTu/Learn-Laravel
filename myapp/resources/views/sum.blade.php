<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum</title>
</head>
<body>
    <div>
        <h1>This is sum page</h1>
        
        <p>{{ $a }} + {{ $b }} = <strong>{{ $sum }}</strong></p>

        @if($sum >= 18)

            <p>Ah, right!</p>

        @else

            <p>No, not ah right!</p>

        @endif

    </div>
</body>
</html>