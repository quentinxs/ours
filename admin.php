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
    <div class="navbar"> <a href="index.php" class="right">Home</a> <a href="profile.php" class="right">Profile</a>
        <?php session_start();
        if(isset($_SESSION['username'])) {
          echo '<a href="logout.php" class="right">Sign Out</a>'; }
      else { echo '<a href="signin.php" class="right">Sign In</a>'; } ?> <a href="search.php" class="right">Search</a> </div>
    <div class="row">
        <div class="side">
            <h2>Profile</h2>
            <div class="profilenav"> <a href="profile.php">Info</a> <a href="profilereg.php">Registered</a> </div>
        </div>
        <div class="main">
            <h2>Update Concert Information</h2>
            <form action="adminOutput.php"> Concert Name:
                <input type="text" name="concertname">
                <br>
                <br> Concert Date:
                <input type="date" name="concertdate">
                <br>
                <br> Concert Time:
                <input type="time" name="concerttime">
                <br>
                <br> Concert Type:
                <input type="text" name="concerttype">
                <br>
                <br> Venue Id:
                <input type="text" name="venid">
                <br>
                <br> Your Admin ID:
                <input type="text" name="adminid">
                <br>
                <br> Seat ID:
                <input type="text" name="seatsid">
                <br>
                <br>
                <button type="submit" class="search-or-add-button"> Update </button>
            </form>
            <br>
            <form action="adminDelete.php"> Concert Name:
                <input type="text" name="concertname">
                <br>
                <br>
                <button type="submit" class="search-or-add-button"> Delete </button>
            </form>
        </div>
    </div>
    <div class="footer">
        <h5>CSI 3370</h5> </div>
</body>

</html>