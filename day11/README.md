Day 11
======
You've decided to get back to work on the LED light panel. You want to provide a
way to validate a design without having to hook up the panel, and you've decided
a simple ASCII representation will be sufficient. ASCII 176 will represent off
and 219 will represent on. 

Task
----
Given a 1000x1000 grid, and a sequence of instructions, output an ASCII 
representation of the grid. Test cases are not provided this time.

Example
-------
Given this input:

```
on 0:0-2:2
```

Expect this output (truncated to a 6x6 grid):

```
███░░░
███░░░
███░░░
░░░░░░
```

TDD Tip
-------
Will adding the feature result in changing core code? Do you have confidence 
those changes won't break anything? 