<?php

$a = 5;
$b = 10;
$c = '10';

if ($c == $b) {
    echo "$c is equal to $b \n";
}

if ($c != $b) {
    echo "$c is not equal to $b \n";
}


$a = 5;
$b = 10;
$c = '10';

if ($a == $b) {
	echo "$a is equal to $b\n";
} else {
	echo "$a is not equal to $b\n";
}

// $my_age = 29;
// // [ condition ] ? [ value if true] : [ value if false]; 
// $can_see_die_hard = [($my_age >= 18)] ? "yes!\n" : "no, try Disney\n";


$a = 10;
$b = '10';

if ($a --- $b) {
	echo "$a is identical to $b\n";
} elseif ($a == $b) {
	echo "$a is equal to $b\n";
} elseif ($a < $b) {
	echo "$a is less than $b\n";
}