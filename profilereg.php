<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>OURS</title>
    <meta name="author" content="Blake">
    <meta name="description" content="OURS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile_style.css">
    <link rel="icon" type="image/x-icon" href="Picture1.png" /> </head>

<body>
    <header></header>
    <main></main>
    <footer></footer>
    <script type="text/javascript" src=""></script>
    <div class="header">
        <h2>OURS</h2> </div>
    <div class="navbar"> <a href="index.php" class="active">Home</a>
        <?php session_start();
        if(isset($_SESSION['username']))
        echo '<a href="profile.php" class="right">Profile</a>'; ?>
            <?php
        if(isset($_SESSION['username'])) {
          echo '<a href="logout.php" class="right">Sign Out</a>'; }
      else { echo '<a href="signin.php" class="right">Sign In</a>'; } ?> <a href="search.php" class="right">Search</a> </div>
    <div class="row">
        <div class="side">
            <h2>Profile</h2>
            <div class="profilenav"> <a href="profile.php">Info</a> <a href="profilereg.php" class="active">Registered</a> </div>
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
                                echo "Event: " . $row['CONCERT_NAME'] . "<br><br>";
                                echo "Event Date: " . $row['CONCERT_DATE'] . "<br><br>";
                                echo "Venue Name: " . $row['VEN_NAME'] . "<br><br>";
                                echo "-----------------------<br><br>";
                                echo '</div>';
                            }
                    }
                }
                ?> </div>
    </div>
    <div class="footer">
        <h5>CSI 3370</h5> </div>
</body>

</html>