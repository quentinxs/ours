		<div class="side">
			<h2>Profile</h2>
			<div class="profilenav">
				<a href="?p=profile">Info</a>
				<a href="?p=profilereg">Registered</a>
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
                                echo "Event: " . $row['CONCERT_NAME'] . "<br><br>";
                                echo "Event Date: " . $row['CONCERT_DATE'] . "<br><br>";
                                echo "Venue Name: " . $row['VEN_NAME'] . "<br><br>";
                                echo "-----------------------<br><br>";
                                echo '</div>';
                            }
                    }
                }
                ?> </div>
