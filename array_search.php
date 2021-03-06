<?php
//WIlliam Cruz
//5/31/14
//Array Functions - Searching in arrays
//Complete and review exercise

// first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function array_has_value($needle, $haystack)
{
    if (array_search($needle, $haystack) === false)
      {
        return false;
      } 
      else 
      {
        return true;
    }

}
var_dump(array_has_value('Tina', $names));


function array_common_count($array1, $array2)
{
    $count = 0;
    foreach ($array1 as $key => $value)
    {
        // echo $value . PHP_EOL;
        if (array_has_value($value, $array2))
        {
            $count++;
        }
    }
    return $count;
}
var_dump(array_common_count($names, $compare));
