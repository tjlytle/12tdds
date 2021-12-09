<?php

namespace TwelveTDD;

use PHPUnit\Framework\TestCase;
use TwelveTDD\Coord as SUT;

class CoordTest extends TestCase
{
    /**
     * @test
     */
    public function getX_returns_first(): void
    {
        $sut = new Coord(1,2);
        self::assertSame(1, $sut->getX());
    }

    /**
     * @test
     */
    public function getY_returns_last(): void
    {
        $sut = new Coord(1,2);
        self::assertSame(2, $sut->getY());
    }

    /**
     * @test
     * @testWith [0,0, true]
     *           [0,999, true]
     *           [999,999, true]
     *           [999,0, true]
     *           [-1,0, false]
     *           [0,-1, false]
     *           [1000,0, false]
     *           [0,1000, false]
     */
    public function grid_is_bound(int $x, int $y, bool $valid): void
    {
        if ($valid) {
            $this->expectNotToPerformAssertions();
        } else {
            $this->expectException(\OutOfBoundsException::class);
        }

        new SUT($x, $y);
    }
}
