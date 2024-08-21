<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isset dan Empty</title>
</head>

<body>
    <p>
        @isset($name)
        Hello, My Name is {{$name}}
        @endisset
    </p>
    <p>
        @isset($hobbies)
        One of my hobbies is {{$hobbies[0]}} and {{$hobbies[1]}}
        @endisset
        @empty($hobbies)
        I don't have hobbies.
        @endempty
    </p>
</body>

</html>