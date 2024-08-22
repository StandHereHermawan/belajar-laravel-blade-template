<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cross Site Request Forgery</title>
</head>

<body>
    <!-- form:post[action="/test"]>input:text[name=name]+br+input:submit[value=Send] -->
    <form action="/test" method="post">
        @csrf
        <input type="text" name="name" id="" /><br />
        <input type="submit" value="Send" />
    </form>
</body>

</html>