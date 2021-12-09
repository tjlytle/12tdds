<?php

namespace TwelveTDD;

use Generator;

class Lights
{
    private array $lights = [];

    public function on(Coord $start, Coord $end): void
    {
        $this->set($start, $end, true);
    }

    public function off(Coord $start, Coord $end): void
    {
        $this->set($start, $end, false);
    }

    public function count(): int
    {
        return array_reduce(
            $this->lights,
            fn(int $count, array $row) => count($row) + $count,
            0
        );
    }

    public function sequence(): string
    {
        return trim(implode("", iterator_to_array($this->buildSequence())), ',');
    }

    private function buildSequence(): Generator
    {
        foreach ($this->lights as $y => $row) {
            $last = null;

            foreach (array_keys($row) as $pos) {
                $last ??= $pos;

                // first set
                if ($pos === $last) {
                    yield $pos + (1000 * $y) . '-';
                    continue;
                }

                if ($pos === $last + 1) {
                    // still in a set
                    $last = $pos;
                    continue;
                }

                yield $last + (1000 * $y) . ',';
                yield $pos + (1000 * $y) . '-';
            }

            if (null !== $last) {
                yield $last + (1000 * $y) . ',';
            }
        }
    }

    private function set(Coord $start, Coord $end, bool $on)
    {
        $x = $start->getX();
        $y = $start->getY();

        do {
            if ($on) {
                $this->lights[$y][$x] = true;
            } else {
                unset($this->lights[$y][$x]);
            }

            if ($x < $end->getX()) {
                $x++;
                continue;
            }

            $x = $start->getX();
            $y++;
        } while($y <= $end->getY());
    }
}