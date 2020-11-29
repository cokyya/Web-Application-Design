<?php
	include("connectdb.php");

	session_start();
	$movieselect = $_SESSION['movieselect'];
	$movieposter = $_SESSION['movieposter'];
	$dateselect = $_SESSION['dateselect'];
	$timeselect = $_SESSION['timeselect'];
	$seatselect = $_SESSION['seatNo'];
	$slotidselect = $_SESSION['selectslot'];

	$name = $_POST['CustName'];
	$email = $_POST['CustEmail'];

	$pieces = explode(",", $seatselect);
	$noofseat = substr_count($seatselect, ",");

	for ($i=0;$i<$noofseat+1;$i++){
		$query3 = "UPDATE seat
				   SET ".$pieces[$i]." = '1'
				   WHERE timeslotid = '$slotidselect'";
		$result = $db->query($query3);
	}

	$orderNo = rand();
    for ($i=0;$i<$noofseat+1;$i++){
        $query4 = "INSERT into orders (orderid, custname, custemail, movieorder, dateorder, timeorder, seatno)
        			VALUES ('$orderNo', '$name', '$email', '".$movieselect."', '$dateselect', '$timeselect', '$pieces[$i]')";
        $result4 = $db->query($query4);
    }

	$to = 'f34ee@localhost';
	$subject = 'Movie tickets order confirmation';
	$message = 'Dear '.$name.',
				You have booked '.$movieselect.' on '.$dateselect.' '.$timeselect.'
				Seat No. '.$seatselect.'
				See you!';
	$headers = 'From: f34ee@localhost' . "\r\n" .
				'Reply-To: f34ee@localhost' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers,'-ff34ee@localhost');
   $db->close();
?>
<html>
<head>
	<title>Summary</title>
	<meta charset="UTF-8">
	<link rel="icon" href="images/movietime.ico">
	<link rel="stylesheet" type="text/css" href="css/movietime.css">
	<script type="text/javascript" src="js/library.js"></script>
</head>
<body>
	<div id="wrapper">
		<?php include "header.php"; ?>
		<?php include 'selectmovie.php';?>
		<div class="progress">
			<div>1. SELECT SEATS</div>
			<div>2. DETAIL & CONFIRM</div>
			<div class="current">3. BOOKING SUCCESSFUL</div>
		</div>
		<div class="conclusion">
			<p>Your payment is made successfully and a confirmation email has been sent to your email address.</p><br><br>
			<p>Thank you and hope you have had a great booking time!</p>
			<button><a href="index.php">Go back to Homepage</a></button>
		</div>
	</div>
	<div mt-include-html="footer.html"></div>
</div>
<script>mt.includeHTML();</script>
</body>
</html>
