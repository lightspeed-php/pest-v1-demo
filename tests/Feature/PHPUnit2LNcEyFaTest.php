<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Lottery;
use Illuminate\Support\Sleep;
use Tests\TestCase;

class PHPUnit2LNcEyFaTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example_2(): void
    {
        Lottery::odds(1, 4)
            ->winner(fn () => usleep(200000))
            ->loser(fn () => usleep(30000))
            ->choose();

        $this->assertTrue(true);
    }
}
