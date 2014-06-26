<?php

for ($n = 1; $n <= 100; $n++) {
	if ($n % 3 == 0 && $n % 5 == 0) {
		echo "FizzBuzz\n";
	} elseif ($n % 3 == 0) {
		echo "Fizz\n";
	} elseif ($n % 5 == 0) {
		echo "Buzz\n";
	} else {
		echo "$n\n";
	}
}
