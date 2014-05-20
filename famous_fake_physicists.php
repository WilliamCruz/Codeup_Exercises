<?php
//William Cruz
//5/20/14

//Create the $famous_fake_physicists string that lists the physicists and contains the "and" at the end.
// This should end with this line:
//Turn your solution into a function named humanized_list(). You should be able to pass the $physicists_array
//as the only argument, and your function will return the result.
//Example code:


// Converts array into list n1, n2, ..., and n3
function humanized_list($string) 
{
	$array = explode(', ', $string);
	$last = array_pop($array);
    $famous_fake_physicists = implode(', ', $array);
	
	$newString = "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}, and $last." . PHP_EOL;
	return $newString;

  // Your solution goes here!
}

$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
// List of famous peeps
echo humanized_list($physicists_string) . PHP_EOL;

// $array_physicists = explode(', ', $physicists_string);
//print_r($physicists_array);
// array_push($array_physicists, $last);
// // Output sentence

?>