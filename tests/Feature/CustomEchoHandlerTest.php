<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Person;
use Tests\TestCase;

class CustomEchoHandlerTest extends TestCase
{
    public function testEcho()
    {
        $person = new Person(null, null);
        $person->setName("Terry Davis");
        $person->setAddress("California");

        $this->view("stringable.file", ["person" => $person])
            ->assertSeeText("Terry")
            ->assertSeeText("Davis")
            ->assertSeeText(":")
            ->assertSeeText("California")
        ;
    }
}
