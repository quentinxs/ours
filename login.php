<?php
session_start();

require_once 'db_connector.php';

if ($connection) {
    $attemptedLoginName = $_POST['login-name'];
    $attemptedPassword = $_POST['login-password'];


    $sql_statement = "SELECT * FROM `customer` WHERE `CUST_USERNAME` = '$attemptedLoginName' AND `CUST_PASSWORD` = '$attemptedPassword' LIMIT 1";
    $result = mysqli_query($connection, $sql_statement);
    if ($result) {
        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['CUST_USERNAME'];
            $_SESSION['userid'] = $row['CUST_ID'];
            $_SESSION['email'] = $row['CUST_EMAIL'];
            header("location:index.php");
        }
        else {
			echo "<script> alert('Login unsuccessful!')</script>";
			include('index.php');
            exit;
        }
    }
    else {
        echo "error" . mysqli_error($connection);
        exit;
    }
}
else {
    echo "Error connecting " . mysqli_connect_errno();
    exit;
}
?>
