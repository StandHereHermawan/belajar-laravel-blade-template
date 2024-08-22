<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stack</title>
</head>

<body>

    @push("script")
    <script src="first.js" />
    @endpush

    @push("script")
    <script src="second.js" />
    @endpush

    @push("script")
    <script src="fourth.js" />
    @endpush

    @prepend("script")
    <script src="third.js" />
    @endprepend

    @stack("script")

</body>

</html>