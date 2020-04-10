<?php

    $username = "root";
    $password = "";
    $hostname = "localhost";
    $dbname = "databaseproject";

    $selected = mysqli_connect($hostname, $username, $password, $dbname);



    $setCname = $_GET['concertname'];
    $setCdate = $_GET['concertdate'];
    $setCtime = $_GET['concerttime'];
    $setCtype = $_GET['concerttype'];
    $setvenid = $_GET['venid'];
    $setadminid = $_GET['adminid'];
    $setseatid = $_GET['seatsid'];
    $sql_statement = "INSERT INTO concert (CONCERT_NAME, CONCERT_DATE, CONCERT_TIME, CONCERT_TYPE, VEN_ID, ADMIN_ID, SEATS_ID) VALUES
    ('$setCname', '$setCdate', '$setCtime', '$setCtype', '$setvenid', '$setadminid', '$setseatid')";


    $result = mysqli_query($selected, $sql_statement);


    echo '<script type="text/javascript">alert("Concert Information Added");</script>';
    header("location: admin.php");
    mysqli_close($selected);
    ?>
