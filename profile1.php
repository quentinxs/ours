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
        <a href="profile.php" class="right">Profile</a>
        <?php session_start();
        if(isset($_SESSION['username'])) {
          echo '<a href="logout.php" class="right">Sign Out</a>'; }
      else { echo '<a href="signin.php" class="right">Sign In</a>'; } ?>
        <a href="search.php" class="right">Search</a>
    </div>

    <div class="row">
        <div class="side">
            <h2>Profile</h2>
            <div class="profilenav">
                <a href="profile" class="active">Info</a>
                <a href="profilereg">Registered</a>
            </div>
        </div>
        <div class="main">
          <form id="profile-info" action="addProfileInfo.php">
            <div class="information">
              <div class="item1">
                First Name: <input name="information-fname" class="information-textbox" id="CUST_FNAME"> </input>
              </div><br>

              <div class="item2">
                Last Name: <input name="information-lname" class="information-lname" id="CUST_LNAME"> </input>
              </div>
<br>
              <div class="item3">
                Email Address: <?php
                echo $_SESSION['email']; ?>
              <div class="item4">
                <br>Phone Number: <input name="information-phone" class="information-phone" id="CUST_PHONE"></input>
              </div><br>
              <button class="information-button" id="info-button" > Submit </button>
          </div>
      </div>
  </div>
    <div class="footer">
        <h5>Group names, class, date </h5>
    </div>





</body></html>
