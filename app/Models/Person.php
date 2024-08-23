<?php

namespace App\Models;

class Person
{

    public function __construct(
        private null|string $name,
        private null|string $address,
    ) {}

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setName(string $value)
    {
        $this->name = $value;
    }

    public function setAddress(string $value)
    {
        $this->address = $value;
    }
}
