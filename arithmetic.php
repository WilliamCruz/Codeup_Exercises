<?php

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
		echo $a + $b . PHP_EOL;
  } else {
		echo 'ERROR: Both arguments should be numbers' . PHP_EOL;
	}
}

add(5, 2);


function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a - $b . PHP_EOL;
  } else {
  		echo 'ERROR: Both arguments should be numbers' . PHP_EOL;
    } 
    // Add code here
}

subtract(4,7);

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a * $b . PHP_EOL;   
  } else {
  		echo 'ERROR: Both arguments should be numbers' . PHP_EOL;
    }   // Add code here 
}
multiply(4,5);

function divide($a, $b) {

	if (is_numeric($a) && is_numeric($b) && $b != 0) {
		echo $a / $b . PHP_EOL;
	} else {
		echo "ERROR" . PHP_EOL;
	}
}
divide(0,5);

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a % $b . PHP_EOL;
  } else {
  		echo 'ERROR: Both arguments should be numbers' . PHP_EOL;
  	}
}	

modulus(4,2);









