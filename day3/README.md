Day 3
=====
You've found that cutting precise holes in thin plywood to be not only easy, but
for some reason strangely satisfying. Because of that you've decided to build 
some LED matrices. You've also decided to write your own driver software. 

Turns out you _really_ like cutting holes, so you have a matrix with a lot of 
LEDs. So many that if they were all on they would draw too much current. Your
first task is to not only allow ranges of LEDs to be turned on or off, but to
know how many will be on at any point. ([Inspired by Advent of Code][1])

Task
----
Given a 1000x1000 grid, and a sequence of instructions, correctly count the 
number of lights that are on.

The instructions are to turn `on` or `off` a block of lights referenced by two
inclusive coordinate pairs. `on 0:0-2:2` would turn on 9 lights.

Example
-------
Given this input sequence:

```
on 0:0-2:2,off 1:1-3:3
```

Expect this output:

```
5 
```

TDD Tip
-------
State after multiple commands is important here. You care that the final result
is correct, as well as each intermediate step. Because of that the provided test
input assumes the state of the last case.

[1]: https://adventofcode.com/2015/day/6