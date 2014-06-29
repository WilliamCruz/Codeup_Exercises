<?php

fwrite(STDOUT, "What is your name? \n");
$name = trim(fgets(STDIN));
fwrite(STDOUT, "Why, hello there {$name}!\n");

?>