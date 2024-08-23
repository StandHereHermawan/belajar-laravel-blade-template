<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExtendingBladeTemplateTest extends TestCase
{
    public function testExtendingBlade()
    {
        $this->view("extending.extending", ["name" => "Terry Davis"])
            ->assertSeeText("Hello")
            ->assertSeeText("Terry")
            ->assertSeeText("Davis")
        ;
    }
}
