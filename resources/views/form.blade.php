<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Blade PHP</title>
</head>

<body>
    <form>
        <input type="checkbox" @checked($user['premium']) value="Premium" /> <br />
        <input type="text" value="{{$user['name']}}" @readonly(!$user['admin']) /> <br />
    </form>
</body>

</html>