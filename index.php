<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>OURS</title>
    <meta name="author" content="Blake">
    <meta name="description" content="OURS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main_style.css">
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
      else { echo '<a href="signin.php" class="right">Sign In</a>'; } ?> <a href="search.php" class="right">Search</a>
                <?php
        if(isset($_SESSION['username'])) {

          if($_SESSION['username'] == 'adminadmin') {
                echo '<a href="admin.php" class="right">Admin</a>';}

      }
         ?> </div>
    <div class="row">
        <div class="side">
            <h2>Profile</h2>
            <div class="profilenav"> <a href="profile.php">Info</a> <a href="profilereg.php">Registered</a> </div>
        </div>
        <div class="main">
            <h2>Project completed by:</h2>
            <h2>Khaled Baayoun</h2>
            <h2>Linghui Pan</h2>
            <h2>Quentin Sheets</h2>
            <h2>Blake Townson</h2>
            <h2>Nick Worthley</h2>
            <h2>Lamianooz Zinia</h2> </div>
    </div>
    <div class="footer">
        <h5>CSI 3370</h5> </div>
</body>

</html>