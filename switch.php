<?php
//William Cruz
//5/29/14
//Control Structures II - switch lesson

// Set the default timezone
date_default_timezone_set('America/Chicago');
$day_of_week = date('N');

switch($day_of_week) {
    case 1:
        echo 'Monday.' . PHP_EOL; 
        break; 
    case 2:
        echo 'Tuesday.' . PHP_EOL;
        break;
    case 3:
        echo 'Wednesday.' . PHP_EOL;
        break;
    case 4:
        echo 'Thursday.' . PHP_EOL;
        break;
    case 5:
        echo 'Friday.' . PHP_EOL;
        break;
    case 6:
        echo 'Saturday.' . PHP_EOL;
        break;
    case 7:
        echo 'Sunday.' . PHP_EOL;
        break;
    default:
        echo 'unknown.' . PHP_EOL;
        break;
}
?>