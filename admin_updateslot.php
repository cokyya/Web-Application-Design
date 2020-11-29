<?php
	include("connectdb.php");

	$movieid = $_POST['movieid'];
	$moviename = $_POST['moviename'];
	$moviedate = $_POST['moviedate'];
	$timeslot = $_POST['timeslot'];

	$query1 = "SELECT *
			 FROM showtime
			 WHERE movieid = '$movieid' and showdate = '$moviedate' and timeslot = '$timeslot'";
	$slot_result = $db->query($query1);
	$num_slot = $slot_result->num_rows;

	if ($movieid && $moviedate && $timeslot && ($num_slot == 0)) {
		$updateTime =
		"INSERT INTO showtime (movieid,showdate,timeslot)
		 VALUES ('$movieid', '$moviedate','$timeslot')";

		$updateTimeResult = $db->query($updateTime);
	}
	
	if ($updateTimeResult) {
		$querytimeID = "SELECT timeslotid
						FROM showtime
						WHERE movieid = '$movieid' and showdate = '$moviedate' and timeslot = '$timeslot'";
		$timeIDresult = $db->query($querytimeID);
		$timeIDrow = $timeIDresult->fetch_assoc();
		$timeID = $timeIDrow['timeslotid'];

		$updateSeat = "INSERT INTO seat (timeslotid) VALUES ('$timeID')";
		$updateSeatResult = $db->query($updateSeat);
	}
	$db->close();
?>


<html lang="en">
<head>
	<title>Update Showtime Page</title>
	<meta charset="utf-8">
	<link rel="icon" href="images/movietime.ico">
	<link rel="stylesheet" type="text/css" href="css/movietime.css">
</head>
<body>
	<div id="wrapper">
		<header>
			<div class="header">
				<a href="index.php">
					<img src="images/cineheader.png" width="250" height="125" href="index.php" alt="cine">
				</a>
				<nav class="admin">
					<a href="admin.html">Admin Page</a>
					<!-- <a href="updateMovie.php">Update Movie</a> -->
				</nav>
			</div>
		</header>
		<div class="admin-content">
			<?php if ($updateSeatResult) :?>
			<form class="admin-form">
				<div class="admin-area">
					<p class="admin-title">
						Congratulation! You have updated the movie Showtime successfully!
					</p>
					<p class="admin-title">
						Click the button to go back to Admin Homepage.
					</p>
					<nav class="admin nav">
					<ol>
						<li><a href="admin.html">Admin Homepage</a></li>
					</ol>
					</nav>
				</div>
			</form>
			<?php endif; ?>
			<?php if (!$updateSeatResult) :?>
			<p class="admin-title">
				Please use form below to update Movie Date and Timeslot.
			</p>
			<form class="admin-form" action="admin_updateslot.php" method="post">
			<div class="admin-area">
				<table class="admin-table">
					<tr>
						<td>
							<label for="movieid">Movie ID:</label>
							<input type="text" name="movieid" id="movieid" placeholder="Movie ID" required>
						</td>
						<td>
							<label for="moviename">Movie Name:</label>
							<input type="text" name="moviename" id="moviename" placeholder="Movie Name" required>
						</td>
					</tr>
					<tr>
						<td>
							<label for="moviedate">Movie Date:</label>
							<input type="date" name="moviedate" id="moviedate" placeholder="Movie Date" required>
						</td>
						<td>
							<label for="movieslot">Time Slot:</label>
							<input type="text" name="timeslot" id="timeslot" placeholder="HH:MM" required>
						</td>
					</tr>
				</table>
			</div>
			<div class="admin-btn">
				<button type="submit" name="submit" class="btn" value="Submit">Submit</button>
			</div>
			</form>
			<?php endif; ?>
		</div>
		<footer id="footer">
			<p class="copyright">
				Copyright &copy; 2017 Cine
			</p>
		</footer>
	</div> <!-- End of Wrapper -->
</body>
</html>