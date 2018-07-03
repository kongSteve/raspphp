<?php

system("gpio -g mode 14 out");//sets the gpio pin mode to output
system("gpio -g write 14 1");//write 1 to the gpio pin- this will turn on the light


?>
