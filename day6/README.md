Day 6
=====
This year you plan on doing a holiday trivia game, and remember that years ago 
you had written some kind of trivia game. You dust off the code and remember 
that the behaviour was a little buggy. Before you make any changes you should 
probably fix it up a bit.

Looking at the code you realize there are no tests. Well, there is a 'runner' 
script that kind of 'simulates' a game. Running that may reveal some issues, but
it's certainly not a great way to test the thing.

First off you remember that the game only really works with 2 or more players,
but nothing protects against that. [source][1]

Task
----
Using the [example code in the language of your choice][2], add tests to ensure 
the game cannot be played when there are less than 2 players.

TDD Tip
-------
How can this be TDD when the code is already written? Well start _this_ 
development process with tests. Write a test that fails against the existing
code, and then do what's needed to make it pass. Once it's passing, you can 
start to refactor _the code under test_ if you want to clean it up a bit more.

[1]: https://kata-log.rocks/bugs-zero-kata
[2]: https://github.com/caradojo/trivia