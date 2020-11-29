

<option value="defult">Please Select Date</option>
<?php
	include("connectdb.php");
	$moviename = $_GET['moviename'];

	$query2 = "SELECT movieid FROM movieinfo WHERE moviename = '".$moviename."'";
	$result2 = $db->query($query2);
	$row2 = $result2->fetch_assoc();
	$movieid = $row2['movieid'];

	$query3 = "SELECT showdate FROM showtime WHERE movieid = '$movieid' GROUP BY showdate";
	$result3 = $db->query($query3);
	$num_dates = $result3->num_rows;

	for ($i=0;$i<$num_dates;$i++) {
		$row3 = $result3->fetch_assoc();
		$moviedate[$i] = $row3['showdate'];
	}
	for ($i=0;$i<$num_dates;$i++){
		echo '<option value="'.$moviedate[$i].'">'.$moviedate[$i].'</option>';
	}
	$db->close();
?>

