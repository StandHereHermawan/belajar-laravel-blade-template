<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeTest extends TestCase
{
    public function testInclude()
    {
        $this->view("include.include", [])
            ->assertSeeText("Laravel ")
            ->assertSeeText("Blade")
            ->assertSeeText(" Template")
            ->assertSeeText("Selamat datang di web");

        $this->view("include.include", ["title" => "Halo pengunjung"])
            ->assertDontSeeText("Laravel ")
            ->assertDontSeeText("Blade")
            ->assertDontSeeText(" Template")
            ->assertSeeText("Halo pengunjung")
            ->assertSeeText("Selamat datang di web");
    }

    public function testLayout()
    {
        $this->view("include.include-desc", [])
            ->assertSeeText("Laravel ")
            ->assertSeeText("Blade")
            ->assertSeeText(" Template")
            ->assertSeeText("Selamat datang di web");

        $this->view("include.include-desc", ["title" => "Halo pengunjung"])
            ->assertDontSeeText("Laravel ")
            ->assertDontSeeText("Blade")
            ->assertDontSeeText(" Template")
            ->assertSeeText("Halo pengunjung")
            ->assertSeeText("Selamat datang di website kami")
            ->assertSeeText("Selamat datang di web");
    }
}
