<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raw PHP</title>
</head>

<body>
    @php
    class Person {
    private string $name;
    private string $address;
    public function __construct(string $name,string $address)
    {
    $this->name = $name;
    $this->address = $address;
    }

    public function getName()
    {
    return $this->name;
    }

    public function getAddress()
    {
    return $this->address;
    }
    }

    $person = new Person("Terry", "California");
    $person->getName();
    $person->getAddress();
    @endphp

    <h1>Person</h1>
    <ul>
        <li>{{$person->getName()}}</li>
        <li>{{$person->getAddress()}}</li>
    </ul>
</body>

</html>