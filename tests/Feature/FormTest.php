<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form", ["user" => [
            "premium" => true,
            "name" => "Terry",
            "admin" => true
        ]])->assertSee("checked")
            ->assertSee("Terry")
            ->assertDontSee("readonly")
        ;

        $this->view("form", ["user" => [
            "premium" => true,
            "name" => "Davis",
            "admin" => false
        ]])->assertSee("checked")
            ->assertSee("Davis")
            ->assertSee("readonly")
        ;

        $this->view("form", ["user" => [
            "premium" => false,
            "name" => "Davis",
            "admin" => false
        ]])->assertDontSee("checked")
            ->assertSee("Davis")
            ->assertSee("readonly")
        ;
    }
}
