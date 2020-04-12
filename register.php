<?php
	 $username = "betownson";
	$password = "WChG3zEdQP5ntscb";
	$hostname = "localhost";
	$dbname = "betownson";

	$selected = mysqli_connect($hostname, $username, $password, $dbname);

    if (mysqli_connect_errno()) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }

	if(isset($_GET['CUST_USERNAME']) && isset($_GET['CUST_PASSWORD']) && isset($_GET['CUST_EMAIL'])){
		$user = $_GET['CUST_USERNAME'];
		$pass = $_GET['CUST_PASSWORD'];
		$email = $_GET['CUST_EMAIL'];
		$query = "SELECT * FROM customer WHERE CUST_USERNAME='$user'";
		$result = mysqli_query($selected, $query);
		if(mysqli_num_rows($result) == 0) {
			$query = "INSERT INTO customer (CUST_USERNAME, CUST_PASSWORD, CUST_EMAIL) VALUES ('$user', '$pass', '$email')";
			$result = mysqli_query($selected, $query);
			echo '<script type="text/javascript">alert("Account Registration Successful!");</script>';
			include("index.php");
		} else {
			echo '<script type="text/javascript">alert("That username is already taken!");</script>';
			echo '<script type="text/javascript">window.history.back(); </script>';
		}
}
	mysqli_close($selected);
?>