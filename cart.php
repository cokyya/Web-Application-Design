<?php
	include("connectdb.php");

	$email = $_POST['CustEmail'];

	$query = "SELECT custname,movieorder, dateorder, timeorder, GROUP_CONCAT(seatno SEPARATOR ',') as seatorder
			   from orders
			   where custemail= '$email'
			   group by custname, orderid,movieorder, dateorder, timeorder";
	$result = $db->query($query);
	$num_result = $result->num_rows;
	for($i=0;$i<$num_result;$i++){
		$row=$result->fetch_assoc();
		$custname[$i]=$row['custname'];
		$movieorder[$i]=$row['movieorder'];
		$dateorder[$i]=$row['dateorder'];
		$timeorder[$i]=$row['timeorder'];
		$seatorder[$i]=$row['seatorder'];
	}
    $db->close();
?>
<html>
<head>
	<title>Check Booking</title>
	<meta charset="UTF-8">
	<link rel="icon" href="images/movietime.ico">
	<link rel="stylesheet" type="text/css" href="css/movietime.css">
	<script type="text/javascript" src="js/library.js"></script>
</head>
<body>
	<div id="wrapper">
		<?php include "header.php"; ?>
		<div class="booking">
			<li class="booking">Check Booking</li>
			<div id="personal">
				<?php
					if($custname[0]){
						echo '<p>Dear '.$custname[0].',</p>';
						echo '<p>You have booked</p>';
						for($i=0;$i<$num_result;$i++){
					  		echo '<p><span id="cart">'.$movieorder[$i].'</span> on '.$dateorder[$i].' '.$timeorder[$i].' <span id="cart">'.$seatorder[$i].'</span></p>';
					  	}
					  	echo '<p>Hope you will enjoy the movie!</p>';
					  	echo '<button><a href="index.php">More Exciting Movies</a></button>';
					}else{
						echo '<p>No booking found</p>';
						echo '<button><a href="index.php">Start Booking Now</a></button>';
					}
				?>
			</div>
		</div>
	<div mt-include-html="footer.html"></div>
	</div>
</div>
<script>mt.includeHTML();</script>
</body>
</html>
