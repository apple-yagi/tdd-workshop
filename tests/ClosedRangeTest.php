<?php

/** @noinspection NonAsciiCharacters */

namespace MyTest;

use PHPUnit\Framework\TestCase;
use TddWorkshop\ClosedRange;

class ClosedRangeTest extends TestCase
{
    private ClosedRange $closedRange;

    public function setUp(): void
    {
        $this->closedRange = new ClosedRange();
    }

    public function test整数閉区間は下端点と上端点を持つこと()
    {
        $this->assertEquals(3, $this->closedRange->lower);
        $this->assertEquals(7, $this->closedRange->upper);
    }
}
