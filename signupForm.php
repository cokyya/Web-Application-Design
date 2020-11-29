<script type="text/javascript" src="js/signup.js"></script>
<p class="form-title">
	Welcome to Movie Time! <br>
	Please Sign Up to get most updated information and deals!
</p>
<form class="sign-form" id="sign-form" action="signup.php" method="POST">
	<div class="sign-area">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" placeholder="Your Name">
		<label for="email">*E-mail:</label>
		<input type="email" name="email" id="email" placeholder="Email Address" required>
		<label for="username">*User Name:</label>
		<input type="text" name="username" id="username" placeholder="User Name" required>
		<label for="password">*Create Password:</label>
		<input type="password" name="password" id="password" placeholder="Password" required>
		<label for="password2">*Confirm Password:</label>
		<input type="password" name="password2" id="password2" placeholder="Password Again" required>
	</div>
	<div class="sign-btn">
		<button type="submit" name="submit" class="btn" value="Register">Register</button>
		<button type="reset" name="reset" class="btn" value="Reset">Reset</button>
	</div>
</form>
<script type="text/javascript" src="js/signupr.js"></script>