<?php

$fruits = array('apple', 'bannana', 'pear', 'grape');

// for ($p = 0; $p < count($fruits); $p++) {
// 	echo "\$fruits has an element of {$fruits[$p]}\n" ;
// }

foreach ($fruits as $fruit) {
	echo $fruit . PHP_EOL;
}