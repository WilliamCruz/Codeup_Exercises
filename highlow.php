<?php

if (!is_numeric($argv[1]) || !is_numeric($argv[2])) {
    echo "I have no idea what you're talking about buddy. \n";
    exit(1);
}
if ($argc == 3) {
} else if($argv[1] != 0 || $argv[2] != 0) {
    $argv++;
}

fwrite(STDOUT, "Guess a number between $argv[1] and $argv[2]." . "\n");

$number = mt_rand($argv[1], $argv[2]);
$guess = 0;
$nug = 0;

while ($guess != $number) {
    $guess = (int) fgets(STDIN);
    $nug++;
    if ($guess < $number) {
        fwrite(STDOUT, "higher\n"); 
    } elseif ($guess > $number) {
        fwrite(STDOUT, "lower \n");
    } else {
    fwrite(STDOUT, "GOOD JOB! It took you $nug tries to guess this number.\n");
}
}   
