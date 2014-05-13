<?php


// Write a program that prints the numbers from 1 to 100. 
// But for multiples of three print “Fizz” instead of the number 
// and for the multiples of five print “Buzz”. For numbers which 
// are multiples of both three and five print “FizzBuzz”

for ($n = 1; $n <= 100; $n++) {
	// echo "$n \n";

	if ($n % 3 == 0 && $n % 5 == 0) {
		echo "FizzBuzz\n";
	} elseif ($n % 3 == 0) {
		echo "Fizz\n";
	} elseif ($n % 5 == 0) {
		echo "Buzz\n";
	} else {
		echo "$n\n";
	}
// for ($n = 1; $n <= 100; $n++) {
// 	echo "$n \n";

}


// for ($n = 1; $n <= 100; $n + 5) {
// 	if ($n % 5);
// 	echo ("Buzz");

