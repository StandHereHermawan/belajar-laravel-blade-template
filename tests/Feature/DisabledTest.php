<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DisabledTest extends TestCase
{
    public function testDisabledBlade()
    {
        $this->view("disabled", ["name" => "Terry"])
            ->assertDontSeeText("Terry")
            ->assertSeeText('Hello {{$name}}');
    }
}
