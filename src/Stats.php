<?php

namespace TwelveTDD;

class Stats
{
    /**
     * @var int[]
     */
    private array $values;

    public static function make(int ...$values)
    {
        return new self(...$values);
    }

    private function __construct(int ...$values)
    {
        $this->values = $values;
    }

    public function min(): int
    {
        return min($this->values);
    }

    public function max(): int
    {
        return max($this->values);
    }

    public function count(): int
    {
        return count($this->values);
    }

    public function average(): float
    {
        return array_sum($this->values) / $this->count();
    }
}