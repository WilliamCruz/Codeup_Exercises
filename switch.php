<?php
//William Cruz
//5/29/14
//Control Structures II - switch lesson
//Corrected and pushed to git 5/31/14

// Set the default timezone

// // Get Day of Week as number
// // 1 (for Monday) through 7 (for Sunday)
// $day_of_week = date('N');
// // $day_of_week = 2;

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
    



		
	






















