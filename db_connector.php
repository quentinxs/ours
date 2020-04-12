<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 $username = "betownson";
	$password = "WChG3zEdQP5ntscb";
	$hostname = "localhost";
	$dbname = "betownson";

// Create connection
$connection = mysqli_connect($hostname, $username, $password, $dbname);

if (mysqli_connect_errno()) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }

?>