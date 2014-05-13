<?php
echo "Enter a starting number.\n";

$low = trim(fgets(STDIN));

echo "Now enter the ending number.\n";

$high = trim(fgets(STDIN));

echo "Enter increment \n";

$inc = trim(fgets(STDIN));


for ($n = $low; $n <= $high; $n = $n + $inc) {
	echo "\n$n\n";
}

// for ($en = 100; $en <= 100; $en -= 1); {
// 	echo "$en";

// }	