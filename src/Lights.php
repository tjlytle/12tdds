<?php

namespace TwelveTDD;

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

    private function set(Coord $start, Coord $end, bool $on)
    {
        $x = $start->getX();
        $y = $start->getY();

        do {
            if ($on) {
                $this->lights[$x][$y] = true;
            } else {
                unset($this->lights[$x][$y]);
            }

            if ($x < $end->getX()) {
                $x++;
                continue;
            }

            $x = $start->getX();
            $y++;
        } while($y <= $end->getY());
    }

    public function count(): int
    {
        return array_reduce(
            $this->lights,
            fn(int $count, array $row) => count($row) + $count,
            0
        );
    }
}