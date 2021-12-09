<?php

namespace TwelveTDD;

use TwelveTDD\Lights as SUT;
use PHPUnit\Framework\TestCase;

class LightsTest extends TestCase
{
    /**
     * @test
     * @dataProvider provideRunnerAndExpected
     */
    public function count_returns_expected(callable $runner, int $expected): void
    {
        $sut = new SUT();
        $runner($sut);

        self::assertSame($expected, $sut->count());
    }

    public function provideRunnerAndExpected()
    {
        $input = file(__DIR__ . '/../day3/input.txt');
        $expected = file(__DIR__ . '/../day3/expected.txt');

        foreach ($expected as $line => $count) {
            $commands = array_slice($input, 0, $line + 1);

            yield [
                function(SUT $sut) use ($commands) {
                    array_walk($commands, [$this, 'applyCommand'], $sut);
                },
                (int) $count
            ];
        }
    }

    public function applyCommand($command, $index, SUT $sut)
    {
        [$command, $range] = explode(' ', $command);
        [$start, $end] = explode('-', $range);

        $sut->$command(
            new Coord(...explode(':', $start)),
            new Coord(...explode(':', $end)),
        );
    }
}
