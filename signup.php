<?php
	include "connectdb.php";

	$username = $_POST['username'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$password2 = $_POST['password2'];

	$password = md5($password);

	if (isset($username) && isset($email) && isset($password)){
		$exist_query = "SELECT * FROM members WHERE username = '$username' OR email = '$email'";
		$exist_result = $db->query($exist_query);
		$exist_num = $exist_result->num_rows;

		if ($exist_num == 0 ) {
			$sql = "INSERT INTO members (username, password, email, name)
				VALUES ('$username', '$password', '$email', '$name')";
			$result = $db->query($sql);
		}
	}
	$db->close();
?>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
	<link rel="icon" href="images/movietime.ico">
	<link rel="stylesheet" type="text/css" href="css/movietime.css">
	<script type="text/javascript" src="js/library.js"></script>
</head>
<body>
	<div id="wrapper">
		<?php include "header.php"; ?>
		<div class="sign-content">
			<?php if (!$result && ($exist_num == 0))
					include "signupForm.php"
			?>
			<?php if ($exist_num != 0) : ?>
				<p class="after-sign">
					<br>
					Sorry, the Username or Email address you entered has already been taken. <br>
					Please try another one.
					<br><br>
				</p>
			<?php endif; ?>
			<?php if ($result) : ?>
				<p class="after-sign">
					Congratulation <span class="outputName"><?php echo $username ?></span>, you have been registered successfully! <br><br>
					The page will be redirected to Sign In automatically in <span id="counter">3</span> second(s).<br>
					If your browser doesn't go there automatically, please click <a href="signin.php">HERE</a> to Sign In.
				</p>
				<script type="text/javascript">
					function countdown() {
						var i = document.getElementById('counter');
						if (parseInt(i.innerHTML)<=0) {
							location.href = 'signin.php';
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