<?php
require_once 'db_connector.php';

$cust_fname = $_GET['CUST_FNAME'];
$cust_lname = $_GET['CUST_LNAME'];
$cust_phone = $_GET['CUST_PHONE'];

$sql_Statement = "INSERT INTO `customer` (`CUST_FNAME`, `CUST_LNAME`, `CUST_PHONE`) VALUES ('$cust_fname', '$cust_lname', '$cust_phone')";
echo '<script type="text/javascript">alert("Profile Information Added");</script>';

if ($connection) {
	$result = mysqli_query($connection, $sql_Statement);
	if ($result) {
		include('profile.php');
	}
	else {
		echo "Error registering information" . mysqli_error($connection);
	}
}
else {
	echo "Error connecting" . mysqli_connect_error();
}
?>
