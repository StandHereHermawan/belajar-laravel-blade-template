<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Environment</title>
</head>

<body>
    <h1>
        <!-- Mengacu pada value config pada file phpunit.xml -->
        @env("testing")
        This is test environment.
        @endenv
    </h1>
</body>

</html>