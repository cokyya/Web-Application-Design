<?php
	session_start();
	$user = $_SESSION['member'];
?>
<header class="header">
	<div>
		<a href="index.php">
			<img src="images/cineheader.png" width="250" height="125" href="index.php" alt="cine">
		</a>
		<?php if (isset($_SESSION['member'])) :?>
			<div class="greet">
				<img src="images/UserIcon.png" width="40px" height="40px">
				<p>
					Welcome Back! <br>
					<?php echo $user; ?>
				</p>
			</div>
		<?php endif; ?>
		<div class="userBtn">
			<?php if (!isset($_SESSION['member'])) :?>
				<button id="userSignInBtn" class="btn" onclick="location.href='signin.php';">
					Sign In
				</button>
				<button id="userSignUpBtn" class="btn" onclick="location.href='signup.php';">
					Sign Up
				</button>
			<?php endif; ?>
			<?php if (isset($_SESSION['member'])) :?>
				<button id="userSignOutBtn" class="btn" onclick="logOutFunction()">
					Log Out
				</button>
			<?php endif; ?>
			<button id="userSignInBtn" class="btnbooking" onclick="location.href='checkbooking.php';">
					Cart
			</button>
		</div>
	</div>
</header>
<script type="text/javascript">
	function logOutFunction() {
	  if (confirm("Are you sure to log out?") == true) {
	    window.location.href = "logout.php";
	  }
	}
</script>