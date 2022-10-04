<?php

/** @noinspection NonAsciiCharacters */

namespace MyTest;

use PHPUnit\Framework\TestCase;
use TddWorkshop\ClosedRange;

class ClosedRangeTest extends TestCase
{
    /** @var int ハッピーパスの下端点 */
    const HappyLower = 3;
    /** @var int ハッピーパスの上端点 */
    const HappyUpper = 7;

    private ClosedRange $closedRange;

    public function setUp(): void
    {
        $this->closedRange = new ClosedRange(self::HappyLower, self::HappyUpper);
    }

    public function test整数閉区間は下端点と上端点を持つこと()
    {
        $this->assertEquals(self::HappyLower, $this->closedRange->lower);
        $this->assertEquals(self::HappyUpper, $this->closedRange->upper);
    }

    public function test整数閉区間の文字列表記を返せること()
    {
        $this->assertEquals('[3,7]', $this->closedRange->getClosedRangeString());
    }
}
