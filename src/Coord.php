<?php

namespace TwelveTDD;

class Coord
{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->assertInBounds($x);
        $this->assertInBounds($y);

        $this->x = $x;
        $this->y = $y;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    private function assertInBounds(int $bound)
    {
        if ($bound < 0 || $bound > 999) {
            throw new \OutOfBoundsException();
        }
    }
}