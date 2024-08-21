<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForLoopTest extends TestCase
{
    public function testForLoop()
    {
        $this->view("looping.for", ["limit" => 10])
            ->assertSeeText("0")
            ->assertSeeText("1")
            ->assertSeeText("2")
            ->assertSeeText("3")
            ->assertSeeText("4")
            ->assertSeeText("5")
            ->assertSeeText("6")
            ->assertSeeText("7")
            ->assertSeeText("8")
            ->assertSeeText("9");
    }

    public function testForEach()
    {
        $this->view("looping.foreach", ["hobbies" => ["Nonton Youtube", "Gaming", "Ngloco"]])
            ->assertSeeText("Nonton Youtube")
            ->assertSeeText("Ngloco")
            ->assertSeeText("Gaming");
    }

    public function testForElse()
    {
        $this->view("looping.forelse", ["hobbies" => ["Nonton Youtube", "Gaming", "Ngloco"]])
            ->assertSeeText("Nonton Youtube")
            ->assertSeeText("Ngloco")
            ->assertSeeText("Gaming");

        $this->view("looping.forelse", ["hobbies" => []])
            ->assertSeeText("Tidak")
            ->assertSeeText("punya")
            ->assertDontSeeText("Nonton Youtube")
            ->assertDontSeeText("Ngloco")
            ->assertSeeText("hobby");
    }
}
