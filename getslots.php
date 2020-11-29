<option value="defult">Please Select Time</option>
<?php
	include("connectdb.php");
	$moviename = $_GET['moviename'];
	$moviedate = $_GET['moviedate'];

	$query2 = "SELECT movieid FROM movieinfo WHERE moviename = '".$moviename."'";
	$result2 = $db->query($query2);
	$row2 = $result2->fetch_assoc();
	$movieid = $row2['movieid'];

	$query3 = "SELECT timeslot FROM showtime WHERE movieid = '$movieid' AND showdate = '$moviedate'";
	$result3 = $db->query($query3);
	$num_slots = $result3->num_rows;

	for ($i=0;$i<$num_slots;$i++) {
		$row3 = $result3->fetch_assoc();
		$movieslot[$i] = $row3['timeslot'];
	}
	for ($i=0;$i<$num_slots;$i++){
		echo "loadbooknow";
		echo '<option value="'.$movieslot[$i].'">'.$movieslot[$i].'</option>';
	}
	$db->close();
?>