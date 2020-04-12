<?php
	session_start();
	require_once 'db_connector.php';
	$pageList = ['home','signin','search','profile','admin','profilereg','register'];
	$page = (isset($_GET['p'])) ? $_GET['p'] : 'home';
	if ($page=='logout') include('logout.php');
?>
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
    <div class="navbar">
		<a href="./" class="<?= ($page=='home') ? 'active' : 'right' ?>">Home</a>
        <?
	if(isset($_SESSION['username']))
echo '<a href="?p=profile" class="'.(($page=='profile') ? 'active' : 'right').'">Profile</a>';
        if(isset($_SESSION['username'])) {
          echo '<a href="?p=logout" class="'.(($page=='logout') ? 'active' : 'right').'">Sign Out</a>'; }
      else { echo '<a href="?p=signin" class="'.(($page=='signin') ? 'active' : 'right').'">Sign In</a>'; } ?>
		<a href="?p=search" class="<?= ($page=='search') ? 'active' : 'right' ?>">Search</a>
        <?php
        if(isset($_SESSION['username'])) {

          if($_SESSION['username'] == 'adminadmin') {
                echo '<a href="?p=admin" class="'.(($page=='admin') ? 'active' : 'right').'">Admin</a>';}

      }
         ?>
	</div>
    <div class="row">
			<?
if ($page == 'home') {
	echo '<div class="side">
	<h2>Profile</h2>
	<div class="profilenav">
	<a href="?p=profile">Info</a>
	<a href="?p=profilereg">Registered</a>
	</div>
	</div>
	<div class="main">
	<h2>Project completed by:</h2>
	<h2>Khaled Baayoun</h2>
	<h2>Linghui Pan</h2>
	<h2>Quentin Sheets</h2>
	<h2>Blake Townson</h2>
	<h2>Nick Worthley</h2>
	<h2>Lamianooz Zinia</h2> </div>';
} elseif (in_array($page,$pageList)) {
	include($page.'.php');
}
	?>
        
    </div>
    <div class="footer">
        <h5>CSI 3370</h5> </div>
</body>

</html>
