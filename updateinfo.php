<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HTML Test File</title>
    <meta name="author" content="Nick">
    <meta name="description" content="HTML Test File">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile_style.css"> </head>

<body>
    <header></header>
    <main></main>
    <footer></footer>
    <script type="text/javascript" src=""></script>
    <div class="header">
        <h2>Event Manager</h2> </div>
    <div class="navbar"> <a href="index.php" class="active">Home</a> <a href="profile.php" class="right">Profile</a>
        <?php session_start();
        if(isset($_SESSION['username'])) {
          echo '<a href="logout.php" class="right">Sign Out</a>'; }
      else { echo '<a href="signin.php" class="right">Sign In</a>'; } ?> <a href="search.php" class="right">Search</a> </div>
    <div class="row">
        <div class="side">
            <h2>Profile</h2>
            <div class="profilenav"> <a href="profile" class="active">Info</a> <a href="profilereg">Registered</a> </div>
        </div>
        <div class="main">
            <?php
                require_once 'db_connector.php';
                $setFname = $_GET['firstname'];
                $setLname = $_GET['lastname'];
                $setemail = $_GET['useremail'];
                $setphone = $_GET['phonenumber'];
                $setpassword = $_GET['password'];
                $userid=$_SESSION['userid'];

                $sql_statement = "UPDATE customer SET CUST_FNAME = '$setFname', CUST_LNAME = '$setLname', CUST_EMAIL = '$setemail', CUST_PHONE = '$setphone', CUST_PASSWORD = '$setpassword' WHERE CUST_ID = 1;";

                if($connection){
                mysqli_query($connection, $sql_statement);
                }

                $sql_statement = "SELECT * FROM customer WHERE CUST_ID='$userid';";

                if ($connection) {
                    $result = mysqli_query($connection, $sql_statement);
                    if ($result) {
                                echo '<h2> Your New Profile Information </h2>';
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div id="table-of-results">';
                                echo "First Name: " . $row['CUST_FNAME'] . "<br><br>";
                                echo "Last Name: " . $row['CUST_LNAME'] . "<br><br>";
                                echo "Email: " . $row['CUST_EMAIL'] . "<br><br>";
                                echo "Phone Number: " . $row['CUST_PHONE'] . "<br><br>";
                                echo "Password: " . $row['CUST_PASSWORD'] . "<br><br>";
                               # echo "Username: " . $_SESSION['username'] . "<br><br>";
                                echo "-----------------------<br><br>";
                                echo '</div>';
                            }
                    }
                }
                ?> </div>
    </div>
    <div class="footer">
		<h5>Group names, class, date</h5>
	</div>
</body>

</html>
