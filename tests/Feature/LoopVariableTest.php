<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoopVariableTest extends TestCase
{
    public function testLoopVariable()
    {
        $this->view("looping.loopvariable", ["hobbies" => ["A", "B", "C", "D", "E"]])
            ->assertSeeText("1. A")
            ->assertSeeText("2. B")
            ->assertSeeText("3. C")
            ->assertSeeText("4. D")
            ->assertSeeText("5. E");
    }
}
