Day 9
=====
Consecutive rolls and answers handled, there's another odd behaviour. If a
player is in the penalty box, and they don't roll to get out, they still need
to 'answer' the question to advance the play. This makes little sense and
uses a question when it's not needed.

Task
----
Using the [example code in the language of your choice][1], add failing tests to
assert that:
- a roll that keeps a player in the penalty box advances play automatically

And then make the tests pass.

TDD Tip
-------
You likely have a decent set of tests in place now, so perhaps there are better
ways to maintain state. Do you feel comfortable changing how the state of the 
game is maintained without breaking behaviour? 

[1]: https://github.com/caradojo/trivia