<?php
	include("connectdb.php");
	session_start();

	if (isset($_POST['username']) && isset($_POST['password'])) {
	  	// if the user has just tried to log in
		$username = $_POST['username'];
		$password = $_POST['password'];

		$password = md5($password);
		$query = "SELECT * FROM members
				 WHERE username='$username'
				 AND password='$password'";
		$result = $db->query($query);
		$isValid = $result->num_rows;
		if ( $isValid > 0 && $username != 'admin') {
			$_SESSION['member'] = $username;
		}
	}
	else {
		if (isset($_SESSION['member'])) {
			unset($_SESSION['member']);
			session_destroy();
		}
	}
	$db->close();
?>
<html lang="en">
<script type="text/javascript" src="js/library.js"></script>
<head>
	<title>Sign In</title>
	<meta charset="utf-8">
	<link rel="icon" href="images/movietime.ico">
	<link rel="stylesheet" type="text/css" href="css/movietime.css">
</head>
<body>
	<div id="wrapper">
		<?php include "header.php"; ?>
		<div class="sign-content">
			<?php if (!isset($_SESSION['member']) && !isset($_POST['username'])) :?>
				<div mt-include-html="signinForm.html"></div>
			<?php endif; ?>
			<?php if (isset($_POST['username']) && isset($_POST['password']) && ($isValid == 0)) :?>
				<p class="after-sign">
					Sorry, you have entered invalid username or password. Please try again.
				</p>
			<?php endif; ?>
			<?php if (isset($_SESSION['member']) && ($username != 'admin')) :?>
				<p class="after-sign">
					Welcome Back <span class="outputName"><?php echo $username ?></span>!
					<br><br>
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
			<?php if (($username == 'admin') && ($_POST['password'] == 'admin')) :?>
				<p class="after-sign">
					Welcome Back <span class="outputName"><?php echo $username ?></span>!
					<br><br>
					The page will be redirected to Admin Page automatically in <span id="counter">3</span> second(s).<br>
					If your browser doesn't go there automatically, please click <a href="admin.html">HERE</a>.
				</p>
				<script type="text/javascript">
					function countdown() {
						var i = document.getElementById('counter');
						if (parseInt(i.innerHTML)<=0) {
							location.href = 'admin.html';
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
<script>mt.includeHTML();</script>
</body>
</html>