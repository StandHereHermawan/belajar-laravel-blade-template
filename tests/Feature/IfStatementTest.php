<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IfStatementTest extends TestCase
{
    public function testIfStatement()
    {
        $this->view("if", ["hobbies" => []])
            ->assertSeeText("I don't", false)
            ->assertSeeText("have any")
            ->assertSeeText("hobbies");

        $this->view("if", ["hobbies" => ["Nonton Youtube"]])
            ->assertSeeText("I")
            ->assertSeeText("have one")
            ->assertSeeText("hobby");

        $this->view("if", ["hobbies" => ["Nonton Youtube", "Buka Facebook", "Ngloco"]])
            ->assertSeeText("I")
            ->assertSeeText("have multiple")
            ->assertSeeText("hobbies");
    }
}
