<?php



  $username = "betownson";
	$password = "WChG3zEdQP5ntscb";
	$hostname = "localhost";
	$dbname = "betownson";

	$selected = mysqli_connect($hostname, $username, $password, $dbname);

session_start();
  $concert_id=$_GET['id'];
  $userid =$_SESSION['userid'];


//  $query = "INSERT INTO customer (CUST_USERNAME, CUST_PASSWORD, CUST_EMAIL) VALUES ('$user', '$pass', '$email')";
  //$result = mysqli_query($selected, $query);

  $query = "INSERT INTO `booking` (`CUST_ID`, `CONCERT_ID`) VALUES ('$userid', '$concert_id')";
  $result = mysqli_query($selected, $query);
  #$sql = "INSERT INTO booking (CUST_ID, CONCERT_ID) VALUES (?, ?)";
  #$stmt=$conn->prepare($sql);
  #$stmt->bind_param("ss", $concert_id, $_SESSION['userid']);
  #$stmt->execute();
  echo '<script type="text/javascript">alert("Profile Information Added");</script>';

  header("location: index.php");
	mysqli_close($selected);
    ?>