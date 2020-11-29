<?php
	include("connectdb.php");

	$normalPrice = $_POST['normalPrice'];
	$memberPrice = $_POST['memberPrice'];

	if ($normalPrice) {
		$query1 = "UPDATE price
				 SET price = '$normalPrice'
				 WHERE customertype = 'normal'";
		$result1 = $db->query($query1);
	}

	if ($memberPrice) {
		$query2 = "UPDATE price
				 SET price = '$memberPrice'
				 WHERE customertype = 'member'";
		$result2 = $db->query($query2);
	}
	$db->close();
?>
<html lang="en">
<head>
	<title>Update Ticket Price Page</title>
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
				</nav>
			</div>
		</header>
		<div class="admin-content">
			<?php if (($result1)||($result2)) :?>
			<form class="admin-form">
				<div class="admin-area">
					<p class="admin-title">
						Congratulation! You have updated the movie price successfully!
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
			<?php if ((!$result1)&&(!$result2)) :?>
			<p class="admin-title">
				Please use form below to update Normal Ticket Price and Member Ticket Price.
			</p>
			<form class="admin-form" action="admin_updateprice.php" method="post">
			<div class="admin-area">
				<table class="admin-table">
					<tr>
						<td>
							<label for="normalPrice">Normal Price:</label>
							<input type="text" name="normalPrice" id="normalPrice" placeholder="Normal Price">
						</td>
						<td>
							<label for="memberPrice">Member Price:</label>
							<input type="text" name="memberPrice" id="memberPrice" placeholder="Member Price">
						</td>
					</tr>
				</table>
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