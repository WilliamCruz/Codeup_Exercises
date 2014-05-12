<?php
// create a number
// while the user hasn't guessed correctly
	// prompt the user "to guess number"
	// get number from user
	// check the number and the guess
	// if the guess is higher than the number then echo "lower"
	// if the guess is lower than the number then echo "higher"
	// add to the guess count
// end the loop
	// if guess and the number are the same say "winner" and end game
fwrite(STDOUT, "Guess a number between $argv[1] and $argv[2]." . "\n");

$number = mt_rand($argv[1], $argv[2]);
// Get the input from user

$guess = 0;
$nug = 0;

while ($guess != $number) {
	$guess = (int) fgets(STDIN);
	$nug++;
	if ($guess < $number) {
	// If the number is too low print
		fwrite(STDOUT, "higher\n");	
	} elseif ($guess > $number) {
	// If the number too high print	
		fwrite(STDOUT, "lower \n");
	} else {
	// fwrite(STDOUT, "You guessed correctly in {$nug}, tries.  \n");
	fwrite(STDOUT, "GOOD JOB! It took you $nug tries to guess this number.\n");
}} 
// Output Diplay number of guesses.
