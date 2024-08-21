<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
</head>

<body>
    @switch($value)
    @case('A')
    <h1>
        Anda lulus dengan memuaskan.
    </h1>
    @break
    @case('B')
    <h1>
        Anda lulus.
    </h1>
    @break
    @case('C')
    <h1>
        Anda lulus dengan uyuhan.
    </h1>
    @break
    @case('D')
    <h1>
        Anda tidak lulus.
    </h1>
    @break
    @default
    <h1>
        Mungkin Anda salah jurusan.
    </h1>
    @endswitch
</body>

</html>