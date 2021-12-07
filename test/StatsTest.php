<?php

namespace TwelveTDD;

use PHPUnit\Framework\TestCase;
use TwelveTDD\Stats as SUT;

// TODO: figure out why this isn't autoloaded
require_once __DIR__ . '/../src/Stats.php';

class StatsTest extends TestCase
{
    /**
     * @test
     * @dataProvider provideExample
     */
    public function getters_return_expected_value(array $values, int $min, int $max, int $count, float $average)
    {
        $sut = SUT::make(...$values);

        self::assertSame($min, $sut->getMin());
        self::assertSame($max, $sut->getMax());
        self::assertSame($count, $sut->getCount());
        self::assertSame($average, $sut->getAverage());
    }

    public function provideExample()
    {
        $input = file(__DIR__ . '/../day1/input.txt');
        $expected = file(__DIR__ . '/../day1/expected.txt');

        if (count($input) !== count($expected)) {
            throw new \RuntimeException('invalid test data');
        }

        foreach ($input as $line => $values) {
            $stats = $expected[$line];

            yield $values => [
                array_map('intval', explode(',', $values)),
                (int) $stats[0],
                (int) $stats[1],
                (int) $stats[2],
                (float) $stats[3],
            ];
        }
    }
}
