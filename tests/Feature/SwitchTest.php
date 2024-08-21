<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SwitchTest extends TestCase
{
    public function testSwitch()
    {
        $this->view("switch", ["value" => "A"])
            ->assertSeeText("memuaskan");

        $this->view("switch", ["value" => "B"])
            ->assertSeeText("lulus");

        $this->view("switch", ["value" => "C"])
            ->assertSeeText("uyuhan");

        $this->view("switch", ["value" => "D"])
            ->assertSeeText("tidak")
            ->assertSeeText("lulus");

        $this->view("switch", ["value" => "E"])
            ->assertSeeText("salah")
            ->assertSeeText("jurusan");

        $this->view("switch", ["value" => "F"])
            ->assertSeeText("salah")
            ->assertSeeText("jurusan");
    }
}
