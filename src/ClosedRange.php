<?php

namespace TddWorkshop;

use Stringable;

class ClosedRange implements Stringable
{
    /**
     * @param int $lower
     * @param int $upper
     */
    public function __construct(public int $lower, public int $upper)
    {
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "[{$this->lower},{$this->upper}]";
    }

    public function has(int $point): bool
    {
        return $this->lower <= $point && $this->upper >= $point;
    }
}
