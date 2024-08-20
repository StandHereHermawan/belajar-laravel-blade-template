<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade If Statement</title>
</head>

<body>

    <p>
        @if (count($hobbies) == 1)
        I have one hobby, {{$hobbies[0]}} !
        @elseif (count($hobbies) > 1)
        I have multiple hobbies! <br>
        Some of them was {{$hobbies[0]}} and {{$hobbies[1]}}.
        @else
        I don't have any hobbies.
        @endif
    </p>

</body>

</html>