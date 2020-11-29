<?php
	session_start();
	$movieselect = $_SESSION['movieselect'];
	$movieposter = $_SESSION['movieposter'];
	$dateselect = $_SESSION['dateselect'];
	$timeselect = $_SESSION['timeselect'];
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Confirmation</title>
	<link rel="icon" href="images/movietime.ico">
	<link rel="stylesheet" type="text/css" href="css/movietime.css">
	<link rel="stylesheet" href="css/seatselection.css">
	<script type="text/javascript" src="js/library.js"></script>
</head>
<body>
	<script type = "text/javascript" src="js/confirmation.js"></script>
	<div id="wrapper">
		<?php include "header.php"; ?>
		<?php include 'selectmovie.php';?>
		<div class="progress">
			<div>1. SELECT SEATS</div>
			<div class="current">2. DETAIL & CONFIRM</div>
			<div>3. BOOKING SUCCESSFUL</div>
		</div>
		<div class="ticket-content confirm">
			<div class="movieselect confirm">
				<div class="poster">
					<?php
						echo '<img id="1" src="'.$movieposter.'" border="0" alt ="'.$moviename.'" width="350" height="450">';
					?>
				</div>
				<div class="info">
					<p class="selectinfo">You have selected
						<?php
							$seatNo = $_GET['seatNo'];
							$_SESSION['seatNo'] = $seatNo;
							$totalamount = $_GET['amount'];
							echo '<span class="select">'.$movieselect.'</span>';
						?>
					</p>
					<table>
						<tr><td class="head">Date:</td>
							<td><?php echo $dateselect ?></td>
						</tr>
						<tr><td class="head">Time:</td>
							<td><?php echo $timeselect ?></td>
						</tr>
						<tr><td class="head">Seat Selected:</td>
							<td><?php echo $seatNo ?></td>
						</tr>
						<tr><td class="head">Total Amount:</td>
							<td><?php echo "$".$totalamount ?></td>
						</tr>
					</table>
				</div>
				<li class="patron">Patron Information</li>
				<form class="infoform" action="summary.php" method="post">
					<div id="patron">
						<div class="information">
							<label for="CustName">Name</label>
							<textarea type="textarea" name="CustName"  id="CustName" placeholder="Name as in Credit Card or NRIC" required></textarea>
						</div>
						<div class="information">
							<label for="mobile">Mobile No.</label>
							<textarea type="textarea" name="PhoneNo"  id="PhoneNo" placeholder="Mobile No."></textarea>
						</div>
						<div class="information">
							<label for="CustEmail">Email</label>
							<input type="email" name="CustEmail"  id="CustEmail" placeholder="Email" required>
						</div>
					</div>
					<input class="pay" type="submit" value="Confirm & Pay">
				</form>
			</div>
		</div>
		<hr>
		<div mt-include-html="footer.html"></div>
	</div> <!-- End of Wrapper -->
<script type = "text/javascript"  src = "js/confirmationr.js" ></script>
<script>mt.includeHTML();</script>
</body>
</html>
