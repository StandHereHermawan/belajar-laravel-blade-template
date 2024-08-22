<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EachOnceTest extends TestCase
{
    public function testEach()
    {
        $this->view("eachonce.each", [
            "users" => [
                [
                    "name" => "Terry Davis",
                    "hobbies" => ["Nonton Youtube", "Maen CoC"]
                ],
                [
                    "name" => "Andrew Terry",
                    "hobbies" => ["Maen Warthunder", "Maen CoC"]
                ]
            ]
        ])->assertSeeInOrder([".grey", "Davis", "Youtube", "CoC", "Andrew", "Warthunder", "CoC"])
            ->assertSeeText("Terry")
            ->assertSeeText("Davis")
            ->assertSeeText("Maen");
    }
}
