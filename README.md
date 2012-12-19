GeSHi Arduino Filter
===
Nigel McNie was kind enough to bring C syntax highlighting to GeSHi... but Arduino sketches aren't exactly C. Trimbitas Sorin-Iulian adapted the original C language data for Arduino... but there are a few things missing IMO. Here's what I'm doing...

* update language data for Due, Uno, etc.
* support documentation web-links (to Arduino.cc reference)
* implement a redirect system for complex web links
* expand web-links to first, second, and fourth tier (structure, variables, and keywords)
* add 'drop-in' to extend web-links to included libraries

Syntax highlighting is good - but a self-guided tour through source sounds even more delicious!

INSTRUCTIONS
---
You should already have a GeSHi install somewhere... right? Drop arduino.php and redirect.php into your GeSHi /geshi folder... and sample.ino and test_arduino.php one directory above. FIRE IT UP!


RELEASE 0.0.1 2012/12/19
---
Functions are covered with Due/Uno support; Bildr.org is giving this a whirl. First-cut of redirect implemented and working nicely.
