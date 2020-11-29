<?php
	session_start();
	if (isset($_SESSION['member'])) {
		unset($_SESSION['member']);
		session_destroy();
	}
?>
<html lang="en">
<head>
	<title>Sign Out</title>
	<meta charset="utf-8">
	<link rel="icon" href="images/movietime.ico">
	<link rel="stylesheet" type="text/css" href="css/movietime.css">
	<script type="text/javascript" src="js/library.js"></script>
</head>
<body>
	<div id="wrapper">
		<?php include "header.php"; ?>
		<div class="sign-content">
			<?php if (isset($_SESSION['member'])) : ?>
				<p class="after-sign">
					Sorry, you are not logged out successfully, please try again later.
				</p>
			<?php endif; ?>
			<?php if (!isset($_SESSION['member'])) : ?>
				<p class="after-sign">
					Dear customer, you have been logged out successfully. Hope to see you again! <br><br>
					The page will be redirected to Homepage automatically in <span id="counter">3</span> second(s).<br>
					If your browser doesn't go there automatically, please click <a href="index.php">HERE</a>.
				</p>
				<script type="text/javascript">
					function countdown() {
					    var i = document.getElementById('counter');
					    if (parseInt(i.innerHTML)<=0) {
					        location.href = 'index.php';
					    }
					    if (parseInt(i.innerHTML)>=1) {
					    	i.innerHTML = parseInt(i.innerHTML)-1;
					    }
					}
					setInterval(function(){ countdown(); },1000);
				</script>
			<?php endif; ?>
		</div>
		<div mt-include-html="footer.html"></div>
	</div>
<script>mt.include HTML();</script>
</body>
</html>