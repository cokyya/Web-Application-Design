<?php
	// Connect to database
	@$db = new mysqli('localhost','username','password','db');
	if ($db->connect_error){
		echo "Database is not online";
		exit;
		}
	if (!$db->select_db ("f34ee"))
		exit("<p>Unable to locate the f34ee database</p>");

	// Pass value from SQL to PHP variable
	$query = "SELECT col_name FROM table_name
			WHERE condition = '".$variable."'";
	$query = "SELECT col_name FROM table_name
			WHERE ".$searchtype." LIKE '%$searchterm%'"
	$result = $db->query($query);
	$num_result = $result->num_rows;
	for ($i=0; $i<$num_result; $i++) {
		$row = $result->fetch_assoc();
		$row[$i] = $row['col_name'];
	}
	for ($i=0; $i<$num_result; $i++) {
		// echo variable in tag attribute
		echo '<img src="'.$row[$i].'">';
		// echo variable in HTML
		echo '<span>'.$row[$i].'</span>';
	}
?>
