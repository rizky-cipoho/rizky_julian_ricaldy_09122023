<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Env;

class ContohTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testGetENV(): void
    {
        $env = env('YOUTUBE');

        self::assertEquals("aku adalah aku", $env);
    }
        public function testGetENVAuthor(): void
    {
        $env = Env::get('AUTHOR', "aku adalah aku"); // authornya juga gk ada di env

        self::assertEquals("aku adalah aku", $env);
    }
}
