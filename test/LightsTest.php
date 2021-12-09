<?php

namespace TwelveTDD;

use TwelveTDD\Lights as SUT;
use PHPUnit\Framework\TestCase;

class LightsTest extends TestCase
{
    /**
     * @test
     * @dataProvider provideRunnerAndCount
     */
    public function count_returns_expected(callable $runner, int $expected): void
    {
        $sut = new SUT();
        $runner($sut);

        self::assertSame($expected, $sut->count());
    }

    /**
     * @test
     * @dataProvider provideRunnerAndSequence
     */
    public function sequence_returns_expected(callable $runner, string $expected): void
    {
        $sut = new SUT();
        $runner($sut);

        self::assertSame($expected, $sut->sequence());
    }

    public function provideRunnerAndCount()
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

    public function provideRunnerAndSequence()
    {
        $input = file(__DIR__ . '/../day4/input.txt');
        $expected = file(__DIR__ . '/../day4/expected.txt');

        foreach ($expected as $line => $sequence) {
            $commands = array_slice($input, 0, $line + 1);

            yield [
                function(SUT $sut) use ($commands) {
                    array_walk($commands, [$this, 'applyCommand'], $sut);
                },
                (string) trim($sequence) // remove newline
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
