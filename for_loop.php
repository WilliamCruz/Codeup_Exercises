<?php
fwrite(STDOUT, "Enter a starting number.\n");
$low = trim(fgets(STDIN));

fwrite(STDOUT, "Now enter the ending number.\n");
$high = trim(fgets(STDIN));

fwrite(STDOUT, "Enter increment.\n");
$inc = trim(fgets(STDIN));

for ($n = $low; $n <= $high; $n = $n + $inc) {
	echo "\n$n\n";
}
	