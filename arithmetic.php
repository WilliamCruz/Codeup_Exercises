<?php

function add($a, $b) {
	error_msg($a, $b);
	return $a + $b;	
}
function subtract($a, $b) {
	error_msg($a, $b);
	return $a - $b;
}
function multiply($a, $b) {
	error_msg($a, $b);
	return $a * $b;    
}
function divide($a, $b) {
	error_msg($a, $b);
	return $a / $b;
}
function modulus($a, $b) {
	error_msg($a, $b);
  	return $a % $b; 
}	
//checking for numeric input, echo error msg if not numeric otherwise, continue
function error_msg($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		echo "$a and $b should both be a number" . PHP_EOL;
	}
}
echo add(5, 0) . PHP_EOL;
echo subtract(4,5) . PHP_EOL;
echo multiply(4,5) . PHP_EOL;
echo divide(0,5) . PHP_EOL;
echo modulus(4,2) . PHP_EOL;
?>
