<?php
//William Cruz
//5/29/14
//break and continue lesson
//Create a file named break_continue.php in your exercises directory. 
//Commit and push to GitHub after each step.
//Create a for loop that shows all even numbers between 1 and 100 using continue.
//Create another for loop that counts from 1 to 100, but stops after 10 using break.


for ($i = 2; $i <= 100; $i += 2) {
	echo $i . "\n";
	if ($i % 2 == 0);
		continue;
	}
	echo "Done";


for ($i = 1; $i <= 100; $i++) {
	echo $i . "\n";
	if ($i >= 10) {
		break;
	}
	
}
echo "Done\n";
