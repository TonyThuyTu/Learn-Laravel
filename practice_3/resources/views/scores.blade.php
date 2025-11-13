<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show scores</title>
</head>
<body>

    <div>

        <h1>This is page use for show scores</h1>

        <p>The array {{ implode (', ', $array) }}</p>

        <ul>

            @foreach ($array as $score)

                <li>{{ $score }}</li>

            @endforeach

        </ul>

    </div>

</body>
</html>