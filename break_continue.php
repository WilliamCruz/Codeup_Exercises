<?php
//WIlliam Cruz
//5/31/14
//Control Structures - break and continue exercises

for ($i = 2; $i <= 100; $i += 2) {
	echo $i . "\n";
	if ($i % 2 == 0){
		continue;
	}
	echo "Done";
}

for ($i = 1; $i <= 100; $i++) {
	echo $i . "\n";
	if ($i >= 10) {
		break;
	}
}
echo "Done\n";
