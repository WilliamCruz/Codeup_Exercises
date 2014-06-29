<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a function that checks if a variable isset or empty, and display "$variable_name is SET|EMPTY"
function  check($var) {
    if (isset($var)) {
        echo 'Variable is SET'. PHP_EOL;
    } elseif (empty($var)) { 
        echo 'Variable is empty' . PHP_EOL;
    } 

} 
check($nothing);
check($something);
check($array);


// Serialize the array $array, and output the results
$ser = serialize($array) ;
    echo $ser;

// Unserialize the array $array, and output the results
$uns = unserialize($ser);
    var_dump ($uns); 
