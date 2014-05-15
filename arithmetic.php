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
// subtract(65,88);
// subtract(37,34);
// subtract(3.5,20);

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a * $b . PHP_EOL;   
  } else {
  		echo 'ERROR: Both arguments should be numbers' . PHP_EOL;
    }   // Add code here 
}
multiply(4,5);
// multiply(65,88);
// multiply(37,34);
// multiply(3.5,20);

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a / $b . PHP_EOL;
  } else {
  		echo 'ERROR: Both arguments should be numbers' . PHP_EOL;
    }
    // Add code here
}

divide(4,2);
// divide(65,88);
// divide(37,34);
// divide(3.5,20);

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a % $b . PHP_EOL;
  } else {
  		echo 'ERROR: Both arguments should be numbers' . PHP_EOL;
  	}
}	

modulus(4,2);
// modulus(65,88);
// modulus(37,34);
// modulus(3.5,20);








