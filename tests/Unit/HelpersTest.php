<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use illuminate\Foundation\Testing\DatabaseMigrations;
use illuminate\Foundation\Testing\DatabaseTransaction;

class HelpersTest extends TestCase
{
    /** @test */
    public function page_title_should_return_the_correct_title()
    {
        dd(page_title(''));
        $this->assertTrue(true);
    }
}
