<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ValidationErrorTest extends TestCase
{
    public function testValidationErrors()
    {
        $errors = [
            "name" => "Name is required",
            "password" => "Password is required"
        ];

        $this->withViewErrors($errors)
            ->view("error.test", [])
            ->assertSeeText("Name is required")
            ->assertSeeText("Password is required")
            ->assertSee("name")
        ;
    }
}
