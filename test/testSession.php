<?php
	session_start();
	$test = 123;
	session_register($test);
	header("location:testSession2.php");
?>
