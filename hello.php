<?php
// file name: hello.php 

function greet() {
	$message = "Hello World! The Date Today is ";
	$message .= date(DATE_RFC822);
	return $message;
}

echo greet();
?>

