<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHelloView()
    {
        $this->get('/hello')
            ->assertSeeText("Laravel Blade")
            ->assertStatus(200);
    }

    public function testWorldView()
    {
        $this->get('/world')
            ->assertSeeText("Laravel Blade World")
            ->assertStatus(200);
    }

    public function testWithoutRoutingWorldView()
    {
        $this->view("hello.world", ["name" => "Laravel Blade World"])
            ->assertSeeText("Blade")
            ->assertSeeText("World")
            ->assertSeeText("Laravel");
    }
}
