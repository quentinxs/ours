        <div class="side">
            <h2>Profile</h2>
            <div class="profilenav"> <a href="?p=profile" class="active">Info</a> <a href="?p=profilereg">Registered</a> </div>
        </div>
        <div class="main">
            <?php
                $setFname = $_POST['firstname'];
                $setLname = $_POST['lastname'];
                $setemail = $_POST['useremail'];
                $setphone = $_POST['phonenumber'];
                $setpassword = $_POST['password'];

                $sql_statement = "UPDATE customer SET CUST_FNAME = '$setFname', CUST_LNAME = '$setLname', CUST_EMAIL = '$setemail', CUST_PHONE = '$setphone', CUST_PASSWORD = '$setpassword' WHERE CUST_ID = $userid;";

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
                ?>
		</div>
