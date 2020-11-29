<html>
<head>
	<title>Cart</title>
	<meta charset="UTF-8">
	<link rel="icon" href="images/movietime.ico">
	<link rel="stylesheet" type="text/css" href="css/movietime.css">
	<script type="text/javascript" src="js/library.js"></script>
	<script type = "text/javascript" src="js/confirmation.js"></script>
	<script type = "text/javascript"  src = "js/confirmationr.js" ></script>
</head>
<body>
	<div id="wrapper">
		<?php include "header.php"; ?>
		<div class="booking">
			<li class="booking">Cart</li>
			<form action="cart.php" method="post"> 
				<div id="personal">
					<p>Input your email address</p>
					<div class="information">
							<label for="CustEmail">Email</label>
							<input type="email" name="CustEmail"  id="CustEmail" placeholder="Email" required>
							<input type="submit" name="booking" id="booking">
					</div>					
				</div>
		</div>		
	<div mt-include-html="footer.html"></div>
	</div>
<script>mt.includeHTML();</script>
</body>
</html>
		