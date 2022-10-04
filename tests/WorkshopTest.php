<?php

namespace MyTest;

use PHPUnit\Framework\TestCase;
use TddWorkshop\Workshop;

class WorkshopTest extends TestCase
{
    public function testSuccess()
    {
        $this->assertEquals("hello world", Workshop::hello());
    }
}
