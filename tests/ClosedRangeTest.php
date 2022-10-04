<?php

/** @noinspection NonAsciiCharacters */

namespace MyTest;

use PHPUnit\Framework\TestCase;
use TddWorkshop\ClosedRange;

class ClosedRangeTest extends TestCase
{
    public function 整数閉区間は下端点と上端点を持つことパターン(): array
    {
        return [
            "整数閉区間は下端点に3と上端点に7を持つこと" => [3, 7],
            "整数閉区間は下端点に1と上端点に100を持つこと" => [1, 100],
            "整数閉区間は下端点に2と上端点に99を持つこと" => [2, 99],
        ];
    }

    /**
     * @dataProvider 整数閉区間は下端点と上端点を持つことパターン
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

    public function 整数閉区間の文字列表記を返せることパターン(): array
    {
        return [
            "整数閉区間は文字列表記の[3,7]を返せること" => [3, 7, '[3,7]'],
            "整数閉区間は文字列表記の[1,100]を返せること" => [1, 100, '[1,100]'],
            "整数閉区間は文字列表記の[2,99]を返せること" => [2, 99, '[2,99]'],
        ];
    }

    /**
     * @dataProvider 整数閉区間の文字列表記を返せることパターン
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

    public function 整数閉区間は指定した整数を含むときにtrueを返せることパターン(): array
    {
        return [
            "整数閉区間は文字列表記の[3,7]を返せること" => [3, 7, 4],
            "整数閉区間は文字列表記の[1,100]を返せること" => [1, 100, 1],
            "整数閉区間は文字列表記の[2,99]を返せること" => [2, 99, 99],
        ];
    }

    /**
     * @dataProvider 整数閉区間は指定した整数を含むときにtrueを返せることパターン
     * @param int $lower
     * @param int $upper
     * @param int $has
     * @return void
     */
    public function test整数閉区間は指定した整数を含むときにtrueを返す(int $lower, int $upper, int $has): void
    {
        $closedRange = new ClosedRange($lower, $upper);
        $this->assertTrue($closedRange->has($has));
        $this->assertTrue($closedRange->has($has));
    }

    public function 整数閉区間は指定した整数を含むときにfalseを返せることパターン(): array
    {
        return [
            "整数閉区間は文字列表記の[3,7]を返せること" => [3, 7, 10],
            "整数閉区間は文字列表記の[1,100]を返せること" => [1, 100, 0],
            "整数閉区間は文字列表記の[2,99]を返せること" => [2, 99, 100],
        ];
    }

    /**
     * @dataProvider 整数閉区間は指定した整数を含むときにfalseを返せることパターン
     * @param int $lower
     * @param int $upper
     * @param int $has
     * @return void
     */
    public function test整数閉区間は指定した整数を含むときにfalseを返す(int $lower, int $upper, int $has): void
    {
        $closedRange = new ClosedRange($lower, $upper);
        $this->assertNotTrue($closedRange->has($has));
        $this->assertNotTrue($closedRange->has($has));
    }
}
