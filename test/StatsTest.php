<?php

namespace TwelveTDD;

use PHPUnit\Framework\TestCase;
use TwelveTDD\Stats as SUT;

class StatsTest extends TestCase
{
    /**
     * @test
     * @dataProvider provideExample
     */
    public function min_returns_expected_value(array $values, array $test_case)
    {
        $sut = SUT::make(...$values);

        self::assertSame((int) $test_case['min'], $sut->min());
    }

    /**
     * @test
     * @dataProvider provideExample
     */
    public function max_returns_expected_value(array $values, array $test_case)
    {
        $sut = SUT::make(...$values);

        self::assertSame((int) $test_case['max'], $sut->max());
    }

    /**
     * @test
     * @dataProvider provideExample
     */
    public function count_returns_expected_value(array $values, array $test_case)
    {
        $sut = SUT::make(...$values);

        self::assertSame((int) $test_case['count'], $sut->count());
    }

    /**
     * @test
     * @dataProvider provideExample
     */
    public function average_returns_expected_value(array $values, array $test_case)
    {
        $sut = SUT::make(...$values);

        self::assertEqualsWithDelta((float) $test_case['average'], $sut->average(), 0.00001);
    }

    public function provideExample()
    {
        $input = file(__DIR__ . '/../day1/input.txt');
        $expected = file(__DIR__ . '/../day1/expected.txt');

        if (count($input) !== count($expected)) {
            throw new \RuntimeException('invalid test data');
        }

        foreach ($input as $line => $values) {
            yield $values => [
                array_map('intval', explode(',', $values)),
                array_combine([
                    'min',
                    'max',
                    'count',
                    'average',
                ], explode(',', $expected[$line]))
            ];
        }
    }
}
