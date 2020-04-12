<?php
$userid=$_SESSION['userid'];

if (isset($_POST['password'])) {
	include('updateinfo.php');
} else {
	$sql_statement = "SELECT * FROM customer WHERE CUST_ID='$userid';";

	if ($connection) {
		$result = mysqli_query($connection, $sql_statement);
		if ($result) {
				while ($row = mysqli_fetch_assoc($result)) {
					$info = $row;
				}
		}
	}
?>
<div class="side">
			<h2>Profile</h2>
			<div class="profilenav">
				<a href="?p=profile">Info</a>
				<a href="?p=profilereg">Registered</a>
			</div>
		</div>
        <div class="main">
            <h2>Update Information</h2>
            <form action="index.php?p=profile" method="post"> First name:
                <input type="text" name="firstname" class="infoform" value="<?=$info['CUST_FNAME'] ?>">
                <br>
                <br> Last name:
                <input type="text" name="lastname" value="<?=$info['CUST_LNAME'] ?>">
                <br>
                <br> Email:
                <input type="email" name="useremail" value="<?=$info['CUST_EMAIL'] ?>">
                <br>
                <br> Phone Number:
                <input type="tel" name="phonenumber" value="<?=$info['CUST_PHONE'] ?>">
                <br>
                <br> Password:
                <input type="password" name="password">
                <br>
                <br>
                <button type="submit" class="search-or-add-button"> Update </button>
            </form>
        </div>
<? } ?>
