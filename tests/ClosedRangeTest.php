<?php

/** @noinspection NonAsciiCharacters */

namespace MyTest;

use PHPUnit\Framework\TestCase;
use TddWorkshop\ClosedRange;

class ClosedRangeTest extends TestCase
{
    public function closedRangePattern(): array
    {
        return [
            "整数閉区間は下端点に3と上端点に7を持つこと" => [3, 7, '[3,7]'],
            "整数閉区間は下端点に1と上端点に100を持つこと" => [1, 100, '[1,100]'],
            "整数閉区間は下端点に2と上端点に99を持つこと" => [2, 99, '[2,99]'],
        ];
    }

    /**
     * @dataProvider closedRangePattern
     * @param int $lower
     * @param int $upper
     * @return void
     */
    public function test整数閉区間は下端点と上端点を持つこと(int $lower, int $upper): void
    {
        $closedRange = new ClosedRange($lower, $upper);
        $this->assertEquals($lower, $closedRange->lower);
        $this->assertEquals($upper, $closedRange->upper);
    }

    /**
     * @dataProvider closedRangePattern
     * @param int $lower
     * @param int $upper
     * @param string $expected
     * @return void
     */
    public function test整数閉区間の文字列表記を返せること(int $lower, int $upper, string $expected): void
    {
        $closedRange = new ClosedRange($lower, $upper);
        $this->assertEquals($expected, (string)$closedRange);
    }
}
