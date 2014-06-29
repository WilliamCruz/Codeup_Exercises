<?php

//Write the output
fwrite(STDOUT, 'What is your first name? ');

//Get the input from user
$first_name = fgets(STDIN);

//Output the user's name
fwrite(STDOUT, "Hello $first_name\n");

// Write the output
fwrite(STDOUT, 'Guess a number? ');

$number = (int)fgets(STDIN);

if ($number % 2 == 0) {
    fwrite(STDOUT, "{$number} is even.\n");
} else {
    fwrite(STDOUT, "{$number} is odd.\n");
}

?>