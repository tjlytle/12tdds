12 TDDs of Christmas
====================

Remembering a [TDD exercise from years ago][1] and how just _doing_ TDD was key 
to it becoming ingrained into my workflow, I thought it might be good to run a 
variation of it this year. Especially since other developers at [PhoneBurner][2] 
seemed interested.

How does it work?
-----------------
If the 12 TDDs have started, take a look at the day directories in this branch. 
To participate simply  fork the repository and create your own branch. When a 
new challenge is released a `git rebase 2021` should get your local copy all up 
to date. 

Each day will have a `README` documenting the exercise, and may include test 
input / expected output. You should be able to complete the exercise using any 
language and testing framework, the exercise resources will be language 
agnostic.

There will be a new challenge every _weekday_ starting December 6th and ending 
December 21st (12 days, right?). The first week will focus on what may seem like 
simple code challenges. The second week will focus on refactoring using TDD.

What are the rules?
-------------------
Not many, that's for sure. Since these are TDD exercises you should start the 
solution by writing a test, then writing the code that makes the test pass. And 
then maybe a refactor or two to improve the solution, leveraging the tests to 
ensure the refactoring doesn't change the behavior. 

And once you have a solution, _share it_! Tweet a link to your solution using 
[#12TDDs][3], or share it with someone else you know participating. Each day 
will have a discussion thread in ['General'][4], but feel free to start threads 
about your solution in ['Show and Tell'][5].

And that's it. No pressure, just an excuse to take some time and improve your 
TDD process.

The 12 Days
-----------
- [Dec 6th (Day 1)](./day1/)
- [Dec 7th (Day 2)](./day2/)
- [Dec 8th (Day 3)](./day3/)

[1]: https://twitter.com/TheRealBifter/status/283701772684517377
[2]: https://www.phoneburner.com/homepage/jobs
[3]: https://twitter.com/hashtag/12tdds
[4]: https://github.com/tjlytle/12tdds/discussions/categories/general
[5]: https://github.com/tjlytle/12tdds/discussions/categories/show-and-tell