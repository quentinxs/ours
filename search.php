<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Database Project</title>
    <meta name="author" content="Nick">
    <meta name="description" content="HTML Test File">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main_style.css">
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
        <?php session_start();
        if(isset($_SESSION['username']))
        echo '<a href="profile.php" class="right">Profile</a>'; ?>
        <?php
        if(isset($_SESSION['username'])) {
          echo '<a href="logout.php" class="right">Sign Out</a>'; }
      else { echo '<a href="signin.php" class="right">Sign In</a>'; } ?>
        <a href="search.php" class="right">Search</a>
    </div>

    <div class="row">
        <div class="side">
            <h2>Profile</h2>
            <div class="profilenav">
                <a href="profile.php">Info</a>
                <a href="profilereg.php">Registered</a>
            </div>
        </div>
        <div class="main">
            <h2>Search</h2>
            <form action="search_output.php">
                <label for="event_name"> Event Name: </label>
                <input type="text" name="eventName" class="search-textbox" id="event_name"><br>

                <label for="city"> City: </label>
                <input type="text" name="city" class="search-city" id="city"><br>

                <label for="date_of_event"> Date: </label>
                <input type="date" name="event" class="search-date" id="date_of_event"><br>
                <button type="submit" class="search-or-add-button"> Search </button>
            </form> <br>

        </div>
    </div>

    <div class="footer">
        <h6>Anthony Robin, Chris Kenneth Viray, Nick Worhtley</h6>
        <h6>CSI 3450</h6>
        <h6>December 3, 2019</h6>
    </div>





</body>

</html>
