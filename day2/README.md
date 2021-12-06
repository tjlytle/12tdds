Day 2
=====
You've found that knots are a bit problematic when it comes to your lasering. 
Even if you avoid the visible knot the area adjacent to the knot can cause 
problems if the knot extends under the surface. This is causing some pain as you
try to determine the likely usable area. Some might say you have the tendency to
over-engineer solutions, but you've decided to apply a minesweeper like method.

Fortunately your ever present pocket notebook is grid lined. So you divide the 
sheet into one inch squares and mark any square with a visible knot with an *.

Task
----
Given grid data with empty squares marked with a `.` and visible knot squares 
marked with an `*`, calculate the riskiness of empty squares by replacing the
`.` with the number of adjacent knot squares.

Example
-------
Given this grid: 

```
*...
..*.
....
```

Expect this output:

``` 
*211
12*1
0111
```

TDD Tip
-------
Remember to test only what you care about, as testing _how_ something is done 
limits your ability to refactor in the future.