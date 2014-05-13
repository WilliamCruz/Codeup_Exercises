<?php

// say hello to the user

if ($argc < 2) {
	$progName = $argv[0];
	echo "Usage: $progName [your name] \n";
	// echo "Hey! I need your name to say hello to you! \n";
	exit(1);
	# code...
}
$name = $argv[1];

echo "Hello " . $name . "\n";
