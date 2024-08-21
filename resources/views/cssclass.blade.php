<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Class</title>
    <style>
        .grey {
            color: lightgray;
        }

        .bold {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <ul>
        @foreach ($hobbies as $hobby)
        <!-- <li class="@if($hobby['love']) bold @endif grey">{{ $hobby['name'] }}</li> -->
        <li @class(['grey' , 'bold'=> $hobby['love']])>{{ $hobby['name'] }}</li>
        @endforeach
    </ul>
</body>

</html>