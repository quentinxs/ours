<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HTML Test File</title>
    <meta name="author" content="Nick">
    <meta name="description" content="HTML Test File">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile_style.css">
    <link rel="icon" type="image/x-icon" href="Picture1.png" />
</head>

<body>
    <header></header>
    <main></main>
    <footer></footer>
    <script type="text/javascript" src=""></script>

    <div class="header">
        <h2>Event Manager</h2>
    </div>

    <div class="navbar">
        <a href="index.php" class="active">Home</a>
        <?php session_start();
        if(isset($_SESSION['username']))
        echo '<a href="profile.php" class="right">Profile</a>'; ?>
        <?php
        if(isset($_SESSION['username'])) {
          echo '<a href="logout.php" class="right">Sign Out</a>'; }
      else { echo '<a href="signin.php" class="right">Sign In</a>'; } ?>
        <a href="search.php" class="right">Search</a>
    </div>

    <div class="row">
        <div class="side">
            <h2>Profile</h2>
            <div class="profilenav">
                <a href="profile">Info</a>
                <a href="profilereg" class="active">Registered</a>
            </div>
        </div>
        <div class="main">

            <?php

                require_once 'db_connector.php';
        
                $userid = $_SESSION['userid'];

                $sql_statement = "SELECT CONCERT_NAME, CONCERT_DATE, VEN_NAME FROM booking, concert, venue WHERE booking.CONCERT_ID = concert.CONCERT_ID and concert.VEN_ID = venue.VEN_ID AND booking.CUST_ID='$userid';";

                if ($connection) {
                    $result = mysqli_query($connection, $sql_statement);
                    if ($result) {
                                echo '<h2> Your Registered Shows </h2>';
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div id="table-of-results">';
                                echo "Concert Name: " . $row['CONCERT_NAME'] . "<br><br>";
                                echo "Concert Date: " . $row['CONCERT_DATE'] . "<br><br>";
                                echo "Venue Name: " . $row['VEN_NAME'] . "<br><br>";
                                echo "-----------------------<br><br>";
                                echo '</div>';
                            }
                    }
                }
                ?>
        </div>
    </div>

    <div class="footer">
        <h5>Group names, class, date </h5>
    </div>





</body>

</html>
