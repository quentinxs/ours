<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>OURS</title>
    <meta name="author" content="Blake">
    <meta name="description" content="OURS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile_style.css"> </head>

<body>
    <header></header>
    <main></main>
    <footer></footer>
    <script type="text/javascript" src=""></script>
    <div class="header">
        <h2>OURS</h2> </div>
    <div class="navbar"> <a href="index.php" class="right">Home</a> <a href="profile.php" class="active">Profile</a>
        <?php session_start();
        if(isset($_SESSION['username'])) {
          echo '<a href="logout.php" class="right">Sign Out</a>'; }
      else { echo '<a href="signin.php" class="right">Sign In</a>'; } ?> <a href="search.php" class="right">Search</a> </div>
    <div class="row">
        <div class="side">
            <h2>Profile</h2>
            <div class="profilenav"> <a href="profile.php" class="active">Info</a> <a href="profilereg.php">Registered</a> </div>
        </div>
        <div class="main">
            <h2>Update Information</h2>
            <form action="updateInfo.php"> First name:
                <input type="text" name="firstname" class="infoform">
                <br>
                <br> Last name:
                <input type="text" name="lastname">
                <br>
                <br> Email:
                <input type="text" name="useremail">
                <br>
                <br> Phone Number:
                <input type="text" name="phonenumber">
                <br>
                <br> Password:
                <input type="text" name="password">
                <br>
                <br>
                <button type="submit" class="search-or-add-button"> Update </button>
            </form>
        </div>
    </div>
    <div class="footer"> </div>
</body>

</html>