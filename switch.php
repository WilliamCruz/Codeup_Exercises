<?php

// Set the default timezone
// date_default_timezone_set('America/Chicago');

// // Get Day of Week as number
// // 1 (for Monday) through 7 (for Sunday)
// $day_of_week = date('N');
// // $day_of_week = 2;

// switch($day_of_week) {
//     case 1:
//     	echo 'Monday.' . PHP_EOL; 
//     	break; 
//     case 2:
//     	echo 'Tuesday.' . PHP_EOL;
//     	break;
//     case 3:
//     	echo 'Wednesday.' . PHP_EOL;
//     	break;
//     case 4:
//     	echo 'Thursday.' . PHP_EOL;
//     	break;
//     case 5:
//     	echo 'Friday.' . PHP_EOL;
//     	break;
//     case 6:
//     	echo 'Saturday.' . PHP_EOL;
//     	break;
//     case 7:
//     	echo 'Sunday.' . PHP_EOL;
//     	break;
//     default:
//     	echo 'unknown.' . PHP_EOL;
//     case 1:    
//         Output Monday
//     case 2:
//         Output Tuesday
//     etc through day 7
// }

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');

if ($day_of_week == 1) {
	echo 'Monday' . PHP_EOL;
} elseif ($day_of_week == 2) {
			echo 'Tuesday' . PHP_EOL; 
} elseif ($day_of_week == 3) {		
			echo 'Wednesday' . PHP_EOL; 
} elseif ($day_of_week == 4) {
			echo 'Thursday' . PHP_EOL; 
} elseif ($day_of_week == 5) {
			echo 'Friday' . PHP_EOL; 
} elseif ($day_of_week == 6) {
			echo 'Saturday' . PHP_EOL;  
} elseif ($day_of_week == 7) {
			echo 'Sunday' . PHP_EOL; 
} else 
	echo 'unknown';

		
	






















