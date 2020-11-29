<?php
	include("connectdb.php");
	session_start();

	if ($_GET['movienames']) {
		$movieselect = $_GET['movienames'];
		$_SESSION['movieselect'] = $movieselect;
		$query_poster = "SELECT poster
			   from movieinfo
			   where moviename = '".$movieselect."'";
		$resultposter = $db->query($query_poster);
		$poster = $resultposter->fetch_assoc();
		$movieposter = $poster['poster'];
		$_SESSION['movieposter'] = $movieposter;
	}
	else {
		$movieselect = $_SESSION['movieselect'];
		$movieposter = $_SESSION['movieposter'];
	}

	$dateselect = $_GET['date'];
	$timeselect = $_GET['showtime'];
	$_SESSION['dateselect']= $dateselect;
	$_SESSION['timeselect']= $timeselect;


	$query1 = "SELECT *
			   from movieinfo
			   where moviename = '".$movieselect."'";
	$result1 = $db->query($query1);
	$id = $result1->fetch_assoc();
	$movieid = $id['movieid'];

	$query2 = "SELECT timeslotid
			   from showtime
			   where movieid = '$movieid' and showdate = '$dateselect' and timeslot = '$timeselect'";
	$result2 = $db->query($query2);
	$select_id = $result2->fetch_assoc();
	$selectslotid = $select_id['timeslotid'];
	$_SESSION['selectslot'] = $selectslotid;

	$query3 = "SELECT*
			  from seat
			  where timeslotid ='$selectslotid'";
	$result3 = $db->query($query3);
	$seatinfo = $result3->fetch_assoc();

	$A1 = $seatinfo['A1'];
	$A2 = $seatinfo['A2'];
	$A3 = $seatinfo['A3'];
	$A4 = $seatinfo['A4'];
	$A5 = $seatinfo['A5'];
	$A6 = $seatinfo['A6'];
	$A7 = $seatinfo['A7'];
	$A8 = $seatinfo['A8'];
	$A9 = $seatinfo['A9'];
	$A10 = $seatinfo['A10'];
	$A11 = $seatinfo['A11'];
	$A12 = $seatinfo['A12'];
	$B1 = $seatinfo['B1'];
	$B2 = $seatinfo['B2'];
	$B3 = $seatinfo['B3'];
	$B4 = $seatinfo['B4'];
	$B5 = $seatinfo['B5'];
	$B6 = $seatinfo['B6'];
	$B7 = $seatinfo['B7'];
	$B8 = $seatinfo['B8'];
	$B9 = $seatinfo['B9'];
	$B10 = $seatinfo['B10'];
	$B11 = $seatinfo['B11'];
	$B12 = $seatinfo['B12'];
	$C1 = $seatinfo['C1'];
	$C2 = $seatinfo['C2'];
	$C3 = $seatinfo['C3'];
	$C4 = $seatinfo['C4'];
	$C5 = $seatinfo['C5'];
	$C6 = $seatinfo['C6'];
	$C7 = $seatinfo['C7'];
	$C8 = $seatinfo['C8'];
	$C9 = $seatinfo['C9'];
	$C10 = $seatinfo['C10'];
	$C11 = $seatinfo['C11'];
	$C12 = $seatinfo['C12'];

	$seatInfo = [$A1,$A2,$A3,$A4,$A5,$A6,$A7,$A8,$A9,$A10,$A11,$A12,$B1,$B2,$B3,$B4,$B5,$B6,$B7,$B8,$B9,$B10,$B11,$B12,$C1,$C2,$C3,$C4,$C5,$C6,$C7,$C8,$C9,$C10,$C11,$C12];

	$seatNo = ['A1','A2','A3','A4','A5','A6','A7','A8','A9','A10','A11','A12','B1','B2','B3','B4','B5','B6','B7','B8','B9','B10','B11','B12','C1','C2','C3','C4','C5','C6','C7','C8','C9','C10','C11','C12'];

	$query4 = "SELECT price
			   from price";
	$result4 = $db->query($query4);
	$num_price = $result4->num_rows;

	for($i=0;$i<$num_price;$i++) {
		$row = $result4->fetch_assoc();
		$pricelist[$i] = $row['price'];
	}

	$normalprice = $pricelist[0];
	$memberprice = $pricelist[1];

	$db->close();
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Seat Selection</title>
	<link rel="stylesheet" href="css/movietime.css">
	<link rel="stylesheet" href="css/seatselection.css">
	<link rel="icon" href="images/movietime.ico">
	<script type="text/javascript" src="js/library.js"></script>
</head>
<body>
	<div id="wrapper">
		<?php include "header.php"; ?>
		<?php include 'selectmovie.php';?>
		<div class="progress">
			<div class="current">1. SELECT SEATS</div>
			<div>2. DETAIL & CONFIRM</div>
			<div>3. BOOKING SUCCESSFUL</div>
		</div>
		<div class="ticket-content">
			<div class="movieselect">
				<div class="selectposter">
					<?php
						echo '<img id="1" src="'.$movieposter.'" border="0" alt ="'.$moviename.'" width="350" height="450">';
					?>
				</div>
				<div class="info">
					<p class="selectinfo">You have selected
						<?php
							echo '<span class="select">'.$movieselect.'</span>';
							echo '<br><br><p class="head">Date</p>';
							echo '<p>'.$dateselect.'</p>';
							echo '<br><br><p class="head">Time</p>';
							echo '<p>'.$timeselect.'</p>';
						?>
					</p>
				</div>
			</div>
			<hr>
			<div class="selectseat">
				<p class="head">SELECT SEATS</p>
			</div>
			<div class="legend">
				<input class="avail" click="blur"></input><span>Available</span>
				<input class="yourseat" click="blur"></input><span>Your Seat</span>
				<input class="sold" click="blur"></input><span>Sold</span>
			</div>
			<form action="confirmation.php" method="get">
				<div class="theater">
					<h2>SCREEN</h2>
					<div class="exit exit--front room"></div>
					<ol>
					<li>
						<ol class="seats" id="rowA">
						<?php
							for($i=0;$i<12;$i++){
								echo '<li class="seat">';
								if($seatInfo[$i]!= NULL){
									echo '<input type="checkbox" disabled value="'.$seatNo[$i].'" id="'.$seatNo[$i].'" class="check" />';
								}
								else{
									echo '<input type="checkbox" value="'.$seatNo[$i].'" id="'.$seatNo[$i].'" class="check" />';
								}
								echo '<label for="'.$seatNo[$i].'">'.$seatNo[$i].'</label>';
								echo '</li>';
							}
						?>
						</ol>
					</li>
					<li>
						<ol class="seats" id="rowB">
						<?php
							for($i=12;$i<24;$i++){
								echo '<li class="seat">';
								if($seatInfo[$i]!= NULL){
									echo '<input type="checkbox" disabled value="'.$seatNo[$i].'" id="'.$seatNo[$i].'" class="check" />';
								}
								else{
									echo '<input type="checkbox" value="'.$seatNo[$i].'" id="'.$seatNo[$i].'" class="check"  />';
								}
								echo '<label for="'.$seatNo[$i].'">'.$seatNo[$i].'</label>';
								echo '</li>';
							}
						?>
						</ol>
					</li>
					<li>
						<ol class="seats" id="rowC">
						<?php
							for($i=24;$i<36;$i++){
								echo '<li class="seat">';
								if($seatInfo[$i]!= NULL){
									echo '<input type="checkbox" disabled value="'.$seatNo[$i].'" id="'.$seatNo[$i].'" class="check" />';
								}
								else{
									echo '<input type="checkbox" value="'.$seatNo[$i].'" id="'.$seatNo[$i].'" class="check" />';
								}
								echo '<label for="'.$seatNo[$i].'">'.$seatNo[$i].'</label>';
								echo '</li>';
							}
						?>
						</ol>
					</li>
					</ol>
				<div class="exit exit--front room"></div>
				<h2>ENTRANCE</h2>
				</div> <!-- End of Theater  -->
				<div class="summary" id="summary">
					<table class="amount">
						<tr><th>Ticket Price</th><th>Qty</th><th>Total Amount</th></tr>
						<tr><td>$
							<span id="price">
							<?php
								if (isset($_SESSION['member']))
									echo $memberprice;
								else
									echo $normalprice; ?>
							</span>
							</td>
							<td id="quantity"></td>
							<td>$<input type="text" name="total" id="total"></td>
						</tr>
					</table>
					<input class="confirm" id="confirm" value="Next" name="confirm" disabled>
				</div>
			</form>
		</div> <!-- End of ticket-content  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type = "text/javascript" src="js/seat.js"></script>
	<hr>
	<div mt-include-html="footer.html"></div>
	</div> <!-- End of Wrapper  -->
<script>mt.includeHTML();</script>
</body>
</html>
