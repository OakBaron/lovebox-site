## Raspberry Pi lovebox
in abstract terms, this projec lets me send messages from my website to the screen of 
a Raspberry Pi, which can then be read by pushing a button on the display.

## motication
this is a Christmas present for my lovely girlfriend :)

## build status
project may be worked on if requested by girlfriend some tentative plans include:
 - making message dissapear after five minutes
 - indicating on the website that the message has been read

## coding style
horrible practices utilized, few comments, philosphy of "it works, so don't touch it" rampant

## method
there are 2 main components here:

 - Raspberry Pi running python in a cron job
 - website hosting an editable text file

this repo is only for the website aspect.

the website has a main page that allows for user input to change the text file that it 
checked by the RPi. there is also the option to "list" it, which creates a list of 
things to send every three days (run by a cron job) if nothing else has been sent 
within that period. txt files are used in the place of databased for simplicity.

## hardware used
 - Raspberry Pi 4, 1GB
 - [2.7 inch Waveshare display](https://www.amazon.com/2-7inch-Resolution-Two-Color-Interface-Raspberry/dp/B07PKSZ3XK/ref=sr_1_4)
 - box to hold RPi, solely for presentation
 - chord to keep pi running 24/7
