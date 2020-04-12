<?php
	if (isset($_GET['q'])) {
		include('search_output.php');
	} else {
		
?>
<div class="side">
            <h2>Profile</h2>
            <div class="profilenav"> <a href="?p=profile">Info</a> <a href="?p=profilereg">Registered</a> </div>
        </div>
        <div class="main">
            <h2>Search</h2>
            <form action="">
				<input type="hidden" name="p" value="search" />
				<input type="hidden" name="q" value="1" />
                <label for="event_name"> Event Name: </label>
                <input type="text" name="eventName" class="search-textbox" id="event_name">
                <br>
                <label for="city"> City: </label>
                <input type="text" name="city" class="search-city" id="city">
                <br>
                <label for="date_of_event"> Date: </label>
                <input type="date" name="event" class="search-date" id="date_of_event">
                <br>
                <button type="submit" class="search-or-add-button"> Search </button>
            </form>
            <br> </div>
<? } ?>
