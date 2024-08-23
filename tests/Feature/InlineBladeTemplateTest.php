<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

class InlineBladeTemplateTest extends TestCase
{
    public function testInline()
    {
        $response = Blade::render('Hello {{ $name }}', ["name" => "Terry Davis"]);
        self::assertEquals("Hello Terry Davis", $response);
    }
}
