<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UnlessStatementTest extends TestCase
{
    public function testUnless()
    {
        $this->view('unless', ["isMyBrother" => true])
            ->assertDontSeeText("You aren't my brother");

        $this->view('unless', ["isMyBrother" => false])
            ->assertSeeText("You aren't my brother", false);
    }
}
