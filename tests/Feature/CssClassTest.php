<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CssClassTest extends TestCase
{
    public function testClass()
    {
        $this->view('cssclass', ["hobbies" => [
            [
                "name" => "Nonton Youtube",
                "love" => true
            ],
            [
                "name" => "Main Game",
                "love" => false
            ]
        ]])->assertSee('<li class="grey bold">Nonton Youtube</li>', false)
            ->assertSee('<li class="grey">Main Game</li>', false);
    }
}
