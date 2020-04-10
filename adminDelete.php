<?php

 $username = "betownson";
	$password = "";
	$hostname = "localhost";
	$dbname = "betownson";

$selected = mysqli_connect($hostname, $username, $password, $dbname);



    $setCname = $_GET['concertname'];
    $sql_statement = "DELETE FROM concert WHERE CONCERT_NAME LIKE '$setCname';";


   $result = mysqli_query($selected, $sql_statement);


    echo '<script type="text/javascript">alert("Deleted Information Added");</script>';
    header("location: admin.php");
    mysqli_close($selected);
    ?>
