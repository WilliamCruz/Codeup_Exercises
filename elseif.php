<?php

$a = 5;
$b = 10;
$c = '10';

if ($a < $b) {
    echo "$a less than $b\n";
} elseif ($b > $a) {
    echo "$b greater than $a";
} else {
    echo "nothing.\n";
}

// Shorten the next 2 statements into an if/else
if ($b >= $c) {
    // output the appropriate result
    echo "$b is greater than or equal to $c\n";
} else {
    // output the appropriate result
    echo "$b is less than or equal to $c\n";
}

// combine the next 4 conditionals into 
// one if/else/elseif block that checks in order for:
// identical, equal, not identical, not equal
if ($b == $c) {
    // output the appropriate result
    echo "$b is equal to $c\n";
} elseif ($b === $c) {
    // output the appropriate result
    echo "$b is identical to $c\n";
}

if ($b != $c) {
    // output the appropriate result
    echo "$b is not equal to $c\n";
} elseif ($b !== $c) {
    // output the appropriate result
    echo "$b is not equal to value and not type $c\n";
}
?>

