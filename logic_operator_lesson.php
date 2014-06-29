<?php

$won_lottery= 'FALSE';
$is_raining = 'TRUE';

if ($won_lottery && $is_raining) {
     echo "I'm buying a new car! \n";
}

$is_logged_in = 'FALSE';
$is_editor = 'TRUE';

if ($is_logged_in && $is_admin) {
    echo "You can administer users\n";
}

if ($is_editor || $is_editor) {
    echo "You can edit this post\n";
}
?>