<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeConditionTest extends TestCase
{
    public function testIncludeCondition()
    {
        $this->view("include-condition.include-condition", [
            "user" => [
                "name" => "Terry",
                "owner" => true
            ]
        ])->assertSeeText("Selamat")
            ->assertSeeText("datang")
            ->assertSeeText("owner")
            ->assertSeeText("Terry")
            ->assertSeeText("Ini")
            ->assertSeeText("adalah");

        $this->view("include-condition.include-condition", [
            "user" => [
                "name" => "Terry",
                "owner" => false
            ]
        ])->assertSeeText("Selamat")
            ->assertSeeText("datang")
            ->assertDontSeeText("owner")
            ->assertSeeText("Terry")
            ->assertDontSeeText("Ini")
            ->assertDontSeeText("adalah");
    }
}
