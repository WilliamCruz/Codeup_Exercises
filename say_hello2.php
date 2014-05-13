<?php

fwrite(STDOUT, "What is your name? ");

$name = trim(fgets(STDIN));

fwrite(STDOUT, "Why, hello {$name}!");