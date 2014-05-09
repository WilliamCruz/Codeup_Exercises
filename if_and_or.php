<?php

$x = 0;
$y = 5;
$z = 10;

if ($x < $y && $y < $z) {
	echo "{$x} < {$y} < {$z}\n";
}

if ($x > 0 || $x < 10) {
	echo "$x is > 0 or < 10\n";
}

if ($y > 0 || $y < 10) {
	echo "$x > 0 or $x < 10\n";
}

if ($z > 0 || $z < 10) {
	echo "$x > 0 or $x < 10\n";
}

if ($x > 0 && $x < 10) {
  echo "$x > 0 && $x < 10\n";
}

?>