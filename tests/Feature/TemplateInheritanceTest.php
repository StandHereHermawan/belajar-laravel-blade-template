<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TemplateInheritanceTest extends TestCase
{
    public function testParentOne()
    {
        $this->view("inheritance.child", [])
            ->assertSeeText("Nama Aplikasi - Halaman Utama")
            ->assertSeeText("Deskripsi Header")
            ->assertSeeText("Ini adalah halaman utama")
        ;
    }

    public function testParentTwo()
    {
        $this->view("inheritance.child_directive", [])
            ->assertSeeText("Nama Aplikasi - Halaman Utama")
            ->assertSeeText("Default Header")
            ->assertSeeText("Deskripsi Header")
            ->assertSeeText("Ini adalah halaman utama")
            ->assertDontSeeText("Default Content")
        ;
    }

    public function testParentNotOverride()
    {
        $this->view("inheritance.child_directive_not_override", [])
            ->assertSeeText("Nama Aplikasi - Halaman Utama")
            ->assertSeeText("Default Header")
            ->assertDontSeeText("Deskripsi Header")
            ->assertDontSeeText("Ini adalah halaman utama")
            ->assertSeeText("Default Content")
        ;
    }
}
