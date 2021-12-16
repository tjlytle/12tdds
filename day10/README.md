Day 10
======
Finally, with bugs fixed and tests in place you feel comfortable enough to start
adding features. Your whole goal was to theme this game for the holidays, but 
the categories are hard coded. Also, it seems like just adding categories would 
break they way they're distributed.

Task
----
Using the [example code in the language of your choice][1], add the ability to
define the categories and seed questions, ensuring that
- categories are evenly distributed around the 'positions' of the 'board'
- running out of questions ends the game cleanly

TDD Tip
-------
Even though the SUT is mostly 'legacy' code (now under test), you should be able
to now introduce better practices as you introduce new behaviour.

[1]: https://github.com/caradojo/trivia