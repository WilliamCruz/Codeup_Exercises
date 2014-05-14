<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)
$day_of_week = date('N');
$day_of_week = 2;

switch($day_of_week) {
    case 1:
    	echo 'The day is Monday.' . PHP_EOL;
    	break;
    case 2:
    	echo 'The day is Tuesday.' . PHP_EOL;
    	break;
    case 3:
    	echo 'The day is Wednesday.' . PHP_EOL;
    	break;
    case 4:
    	echo 'The day is Thursday.' . PHP_EOL;
    	break;
    case 5:
    	echo 'The day is Friday.' . PHP_EOL;
    	break;
    case 6:
    	echo 'The day is Saturday.' . PHP_EOL;
    	break;
    case 7:
    	echo 'The day is Sunday.' . PHP_EOL;
    	break;
    default:
    	echo 'The day is unknown.' . PHP_EOL;
    // case 1:    
        // Output Monday
    // case 2:
        // Output Tuesday
    // etc through day 7
}