<?php

$names = ['Marc Andreessen', 'Tim Berners-Lee', 'Len Bosack', 'Steve Case', 'Vint Cerf', 'Len Kleinrock', 'J.C.R. Licklider', 'Bob Metcalfe', 'Ray Tomlinson'];

$query = 'Tim Berners-Lee';

$result = array_search($query, $names);

echo "Result is key {$result} in array. \n ";

if ($result) {
    echo $names[$result] . PHP_EOL;
}

$snake = [1,2,3,4,5];
print_r($snake);

// Remove first item
array_shift($snake);
// Append item
array_push($snake, 6);

function fix_name($name) {
    return ucwords(trim($name)) . PHP_EOL;
}
echo fix_name("\t\tWilliam Cruz\n") . PHP_EOL;

$my_name = fix_name("\t\tWilliam Cruz\n") . PHP_EOL;

echo $my_name;

//implode and explode arrays
$physicists_string = 'Gordon Freeman,Samanthat Carter, Sheldon Cooper, Quinn MAllory, Bruce Banner, Tony Stark';
//Delimeter is the comma in this case and this is where the explode function has been called in this example.
$physicists_array = explode(',',$physicists_string);

print_r($physicists_array);

?>