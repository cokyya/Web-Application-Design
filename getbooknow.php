<?php
	include("connectdb.php");
	$moviename = $_GET['moviename'];
	$moviedate = $_GET['moviedate'];
	$movieslot = $_GET['movieslot'];

	$query2 = "SELECT movieid FROM movieinfo WHERE moviename = '".mysql_escape_string($moviename)."'";
	$result2 = $db->query($query2);
	$row2 = $result2->fetch_assoc();
	$movieid = $row2['movieid'];

	$query3 = "SELECT timeslot FROM showtime WHERE movieid = '$movieid' AND showdate = '$moviedate' AND timeslot = '$movieslot'";
	$result3 = $db->query($query3);
	$num_slots = $result3->num_rows;

	if ($num_slots > 0) {
		echo '<input type="submit" value="Book Now" />';
	}
	$db->close();
?>