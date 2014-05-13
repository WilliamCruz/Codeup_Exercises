<?php

// // Write the output
// // Notice the space after the ?
// fwrite(STDOUT, 'What is your first name? ');

// // Get the input from user
// $first_name = fgets(STDIN);

// // Output the user's name
// fwrite(STDOUT, "Hello $first_name\n");

// Write the output
// Notice the space after the ?
fwrite(STDOUT, 'Guess a number? ');

// Get the input from user
$number = (int)fgets(STDIN);

If ($number % 2 == 0) {
	fwrite(STDOUT, "{$number} is odd\n");
}
// Output the user's name
fwrite(STDOUT, "{$number} is even \n");
