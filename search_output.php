        <div class="side">
            <h2>Profile</h2>
            <div class="profilenav"> <a href="?p=profile">Info</a> <a href="?p=profilereg">Registered</a> </div>
        </div>
        <div class="main">
            <h2>Search</h2>
            <div id="concert-table-listing">
                <table id="concert-table">
                    <tr>
                        <th></th>
                        <th> Date </th>
                        <th> Venue </th>
                        <th>Section</th>
                        <th> Reserve Tickets </th>
                    </tr>
                    <?php
        $username = "betownson";
        $password = "WChG3zEdQP5ntscb";
        $hostname = "localhost";
        $dbname = "betownson";

            $conn = mysqli_connect($hostname, $username, $password, $dbname);
             // Check connection
             if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
             }

             $searchcname = $_GET['eventName'];
             $searchccity = $_GET['city'];
             $searchcdate = $_GET['event'];
            $sql = "SELECT `concert`.`CONCERT_ID`,`concert`.`CONCERT_NAME`, `concert`.`CONCERT_DATE`, `concert`.`CONCERT_TIME`, `venue`.`VEN_NAME` 
            FROM `concert`
            INNER JOIN `venue`
            ON `concert`.`VEN_ID` = `venue`.`VEN_ID`
            WHERE 1 OR (concert.CONCERT_NAME = '$searchcname' OR concert.CONCERT_DATE ='$searchcdate');";

             $result = $conn->query($sql);
             $counter = 1;
             if ($result->num_rows > 0) {
              // output data of each row
             while($row = $result->fetch_assoc()) {
            	echo "<tr><td id='event_name'>" . $row['CONCERT_NAME'];
                echo "<td id='date_of_event'>" . $row['CONCERT_DATE'];
                echo "<td id='venue'>" . $row['VEN_NAME'];
                echo "<td id='section'>" . $row['SEATS_SECTION'];
               // echo "<td><a href='addevent.php?id=".$row['CONCERT_ID']."&vid=".$row['VEN_ID']."'>Add</a></td>";
                 echo "<td id='concert'><a href='addevent.php?id=".$row['CONCERT_ID']."'>Add</a></td>";
            }
                 
            echo '</table>';
            } else { echo '0 results'; }
            $conn->close();
            ?>
                </table>
            </div>
        </div>
