<?php
@$db = new mysqli('localhost','root','root','cine');
if ($db->connect_error){
	echo "Database is not online"; 
	exit;
	}
if (!$db->select_db ("cine"))
	exit("<p>Unable to locate the f34ee database</p>");
?>	