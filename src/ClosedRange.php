<?php

namespace TddWorkshop;

class ClosedRange
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
}
