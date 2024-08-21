<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    public function testIssetAndEmpty()
    {
        $this->view('issetempty', [])
            ->assertDontSeeText("Hello")
            ->assertDontSeeText("My")
            ->assertDontSeeText("Name");

        $this->view('issetempty', ["name" => "Terry"])
            ->assertSeeText("Hello, My Name is Terry", false)
            ->assertSeeText("I don't have hobbies", false)
            ->assertDontSeeText("One of my hobbies is");

        $this->view('issetempty', ["name" => "Terry", "hobbies" => ["Nonton Youtube", "Maen Discord"]])
            ->assertSeeText("Hello, My Name is Terry", false)
            ->assertDontSeeText("I don't have hobbies", false)
            ->assertSeeText("One of my hobbies is")
            ->assertSeeText("Nonton Youtube")
            ->assertSeeText("Maen Discord");
    }
}
