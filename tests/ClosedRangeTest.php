<?php

namespace MyTest;

use PHPUnit\Framework\TestCase;
use TddWorkshop\ClosedRange;

class ClosedRangeTest extends TestCase
{
    public function testSuccess()
    {
        $this->assertEquals("hello world", ClosedRange::hello());
    }
}
