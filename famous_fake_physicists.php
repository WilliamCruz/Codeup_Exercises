<?php
//William Cruz
//5/20/14

//Create the $famous_fake_physicists string that lists the physicists and contains the "and" at the end.
// This should end with this line:


// Converts array into list n1, n2, ..., and n3
// function humanized_list($array) {
  // Your solution goes here!
// }

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$array_physicists = explode(', ', $physicists_string);

$last = array_pop($array_physicists);
$last = "and $last";
array_push($array_physicists, $last);
$famous_fake_physicists = implode(', ', $array_physicists);
// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;

?>