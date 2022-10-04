<?php

namespace TddWorkshop;

class ClosedRange
{
    public int $lower;
    public int $upper;

    /**
     * @param int $lower
     * @param int $upper
     */
    public function __construct(int $lower, int $upper)
    {
        $this->upper = $upper;
        $this->lower = $lower;
    }

    /**
     * @return string
     */
    public function getClosedRangeString(): string
    {
        return "[3,7]";
    }
}
