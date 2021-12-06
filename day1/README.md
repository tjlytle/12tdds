Day 1
=====
This season you've been happily making gifts on your new laser cutter (lucky 
you). You head to the workshop nightly after work and dinner. Each night you 
keep a record of the gift output from each job, which results in a set of 
numbers for each session. Sometimes jobs fail so the number you track is the 
amount of successful gifts with the failed subtracted. Unfortunately this means 
for some jobs the number you track is negative.

So far the job data from each session is written down as a line in a notebook 
kept in your pocket. Wanting to better visualize the data you decide to start by 
writing some code to take a set of numbers and provide some useful statistics.

Task
----
Given a set of integers, determine the following statistics:
- minimum value
- maximum value
- number of values
- average value

Example
-------
Given this set: `[6, 9, 15, -2, 92, 11]`

- minimum value: `-2`
- maximum value: `92`
- number of values: `6`
- average value: `21.833333`

TDD Tip
-------
Don't let the format of the provided test input or output influence your design. 
TDD allows you to _consume_ the code you're working on _before_ you implement 
it. That provides a great opportunity to experience the interface of your code,
and potentially change it when it's in the most malleable state.

Use the process of setting up your test help determine the interface of your 
code. Is it a method? What does that method return? A dictionary? An object? Is 
the SUT even a method? Could it be an object itself?