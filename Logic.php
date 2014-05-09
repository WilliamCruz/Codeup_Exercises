<?php

// $won_lottery= FALSE;
// $is_raining = 'TRUE';

// if ($won_lottery && $is_raining) {
// 	 echo "\$I'm buying a new car! \n";
// }


$is_logged_in = false;
$is_editor = true;

 if ($is_logged_in && $is_admin) {
	echo " You cna administer users\n";
}

if ($is_editor || $is_editor) {
	echo "You jcan edit this post\n";
}