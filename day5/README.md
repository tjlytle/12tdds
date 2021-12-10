Day 5
=====
Turns out your little 'how many lights are on' calculation _was_ useful. Because
you'll eventually be sending the light updates tirelessly, and hope to achieve 
something close to animation, you realize it's not efficient to always turn the
entire grid off and then selectively turn on lights when refreshing the display.

Sometimes it'd be far more efficient to turn the entire grid _on_ and then 
selectively turn _off_ lights. It depends on how many lights are on. If more 
lights are on than off, it's better to start with all the lights on, and turn
off as needed.

You've updated the microcontroller to expect `on/` or `off/` before the range of 
lights to switch to the alternate state. So to turn off all the lights and then
turn on the 5th to 10th LEDs as well as the 15th to 21st and the 25th by itself 
you would send:

`off/4-9,14-20,24-24`

To turn on all the lights and then turn off the 5th to 10th LEDs as well as the 
15th to 21st and the 25th by itself you would send:

`on/4-9,14-20,24-24`

Task
----
Given a 1000x1000 grid, and a sequence of instructions, output the range of 
lights that should be turned on or off after first setting the entire grid state
to on if the number of lights on are more than the number of lights off. If the 
number of lights off are more than the number on, first set the entire grid 
state to off. If the number are the same, first set it to off.

Example
-------
Given this input sequence:

```
on 0:0-2:2
off 1:1-3:3
on 0:0-999:999
off 0:0-2:2
on 1:1-3:3
```

Expect this output after each input:

```
off/0-2,1000-1002,2000-2002
off/0-2,1000-1000,2000-2000
on/
on/0-2,1000-1002,2000-2002
on/0-2,1000-1000,2000-2000
```

Note that turning all the lights on or off results in just the initial command. 

TDD Tip
-------
Like last time the provided test input assumes the state of the last case. Does
this new requirement change your original design? Is any of your past code (test
or otherwise) useful for this case?
