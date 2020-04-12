<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>OURS</title>
    <meta name="author" content="Blake">
    <meta name="description" content="OURS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="account_style.css">
    <link rel="icon" type="image/x-icon" href="Picture1.png" /> </head>

<body>
    <header></header>
    <main></main>
    <footer></footer>
    <script type="text/javascript" src=""></script>
    <div class="header">
        <h2>OURS</h2> </div>
    <div class="navbar"> <a href="index.php" class="right">Home</a>
        <?php session_start();
        if(isset($_SESSION['username']))
        echo '<a href="profile.php" class="right">Profile</a>'; ?>
            <?php
        if(isset($_SESSION['username'])) {
          echo '<a href="logout.php" class="right">Sign Out</a>'; }
      else { echo '<a href="signin.php" class="active">Sign In</a>'; } ?> <a href="search.php" class="right">Search</a> </div>
    <div class="row">
        <div class="side">
            <h2>Account</h2>
            <div class="profilenav"> <a href="signin" class="active">Sign In</a> <a href="register.html">Create Account</a> </div>
        </div>
        <div class="main">
            <h2>Sign In</h2>
            <form id="index-login" action="login.php">
                <div class="login">
                    <div class="item1"> Username:
                        <input name="login-name" class="login-textbox" id="CUST_USERNAME"> </input>
                    </div>
                    <br>
                    <div class="item2"> Password:
                        <input type="password" name="login-password" class="login-textbox" id="CUST_PASSWORD"> </input>
                    </div>
                    <br>
                    <div class="item3">
                        <button class="login-button" id="login-button"> Login </button>
                    </div>
                </div>
        </div>
    </div>
    <div class="footer">
        <h5>CSI 3370</h5> </div>
</body>

</html>