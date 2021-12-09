Day 4
=====
Well, math is hard and turns out you were nowhere near drawing too much current.
Oh well, at least you're sure your code worked. Now you need to take the current
state of the LEDs and send the needed signals over the serial line to actually 
turn the lights on and off.

The lights are essentially a shift register and a bunch of highs and lows are 
shifted onto them until all the lights are either on or off. Instead of sending
all that data over the serial line, instead you've written some code on the 
microcontroller that turns all the lights off, and then expects an ordered 
range of light groups to turn on. 

To turn on the 5th to 10th LEDs as well as the 15th to 21st, and the 25th by 
itself you would send:
`4-9,14-20,24-24`

In this context the ranges aren't a grid, but rather one long 'line' of lights. 
`0:0` represents the grid coordinate of the first light, while `0` represents 
that individual light in series. `999:999` represents the last light on the 
grid, but `999999` in series. 

Each row of the grid wraps around to the start of the next grid. So `999:0` is
the last light in the first row and is `999` in series. `0:1` is the first light 
in the second row and is `1000` in series.

Task
----
Given a 1000x1000 grid, and a sequence of instructions, output the range of 
lights that should be turned on to achieve the current grid state, assuming the 
hardware clears all the lights before turning any on.

Example
-------
Given this input sequence:

```
on 0:0-2:2
off 1:1-3:3
```

Expect this output after each input:

```
0-2,1000-1002,2000-2002
0-2,1000-1000,2000-2000
```

Note that each input changes the grid state, but the output must assume all 
lights are turned off every time the display is updated. 

TDD Tip
-------
Like last time the provided test input assumes the state of the last case. Does
this new requirement change your original design? Is any of your past code (test
or otherwise) useful for this case?
