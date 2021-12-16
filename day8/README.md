Day 9
=====
There are a few odd state issues you decide to clean up. Currently nothing stops
you from adding a player after the game has started. There is also nothing
requiring an answer before rolling again, or requiring a roll before answering
again. Calling the code with consecutive rolls or answers has bad behaviour as
the same player is advanced on consecutive rolls, but a different player gets
awarded on consecutive answers.

Task
----
Using the [example code in the language of your choice][1], add failing tests to
assert that:
- you cannot add a player after the first role
- you cannot roll twice
- you cannot answer twice

And then make the tests pass.

TDD Tip
-------
At this point allowing the state to be observed from the outside may be helpful
in asserting the expected behaviour. Whatever methods you add, be sure they're
tested as you don't want to add to the technical debt of this project.

[1]: https://github.com/caradojo/trivia