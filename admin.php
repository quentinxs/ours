		<div class="side">
			<h2>Profile</h2>
			<div class="profilenav">
				<a href="?p=profile">Info</a>
				<a href="?p=profilereg">Registered</a>
			</div>
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
