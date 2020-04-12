<?php
	if(isset($_POST['CUST_USERNAME']) && isset($_POST['CUST_PASSWORD']) && isset($_POST['CUST_EMAIL'])){
		$user = $_POST['CUST_USERNAME'];
		$pass = $_POST['CUST_PASSWORD'];
		$email = $_POST['CUST_EMAIL'];
		$query = "SELECT * FROM customer WHERE CUST_USERNAME='$user'";
		$result = mysqli_query($selected, $query);
		if(mysqli_num_rows($result) == 0) {
			$query = "INSERT INTO customer (CUST_USERNAME, CUST_PASSWORD, CUST_EMAIL) VALUES ('$user', '$pass', '$email')";
			$result = mysqli_query($selected, $query);
			echo '<script type="text/javascript">alert("Account Registration Successful!");</script>';
		} else {
			echo '<script type="text/javascript">alert("That username is already taken!");</script>';
			echo '<script type="text/javascript">window.history.back(); </script>';
		}
	}
?>
<div class="side">
	            <h2>Profile</h2>
	            <div class="profilenav">
	                <span class="menu-item"><a href="profile">Info</a></span> |
	                <span class="menu-item"><a href="profilereg">Registered</a></span> |
	            </div>
	    </div>
	        <div class="main">
	            <h2>Register</h2>
							<br>
							<div id="form-container" class="register-box-overall">
							<form action="index.php?p=register" method="post">
								<div class="register-box">
									<label for="CUST_USERNAME"> Username: </label>
									<input type="text" name="CUST_USERNAME" placeholder="Create a username" class="search-textbox-register" id="CUST_USERNAME">
								</div><br>
								<div class="register-box">
									<label for="CUST_PASSWORD"> Password: </label>
									<input type="password" type="password" name="CUST_PASSWORD" placeholder="Enter a password" class="search-textbox-register" id="CUST_PASSWORD">
								</div><br>

								<div class="register-box">
									<label for="CUST_EMAIL"> Email Address: </label>
									<input type="email" name="CUST_EMAIL" placeholder="Enter a valid email." class="search-textbox-register" id="CUST_EMAIL">
								</div><br>
									<button type="submit" name="submit" onclick="checkUsernameAndPasswordValidity(event)" class="search-or-add-button" id="register"> Register </button>

							</div>
						</form>
							</div>
							<script>
							function checkUsernameAndPasswordValidity(e) {
							var passwordLength = document.getElementById("CUST_PASSWORD").value;
							var usernameLength = document.getElementById("CUST_USERNAME").value;
							var emailLength = document.getElementById("CUST_EMAIL");
							if ((usernameLength.length <= 0) || (passwordLength.length < 8) || (emailLength.value.length <= 0) || (!emailLength.isValid())) {
							alert("Username length was: " + usernameLength.length + ". Password length was: " + passwordLength.length + ". Email length was: " + emailLength.length + ". Registration failed. Username and email cannot be empty, and password must be more than 8 characters long.");
							e.preventDefault();
							} else {
							alert("Registration successful.");
							}
							}
</script>
<!--
This page manages the GUI that users will see for the login page. It manages the validation as well for registration.
!-->
