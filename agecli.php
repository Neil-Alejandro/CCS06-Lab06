<?php

$Name = $argv[1];
$Age = (date("Y") - $argv[2]);

echo "Your name is $Name,"; 
echo " and your age is $Age \n";

if ($Age >= 18) {
	echo "You are voter \n";
} else {
	;
}

if ($Age >= 60) {
	echo "You are a senior citizen \n";
} else {
	;
}
?>