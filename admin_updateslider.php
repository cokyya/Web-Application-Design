
	
<?php
	include("connectdb.php");

	$sliderid = $_POST['sliderid'];
	$caption = $_POST['caption'];
	$slider = $_FILES['sliderpath']['name'];
	$slider_path = "Slider/$slider";


	if ($sliderid && $slider) {

		$updateQuery = "INSERT INTO sliderpic (sliderid,sliderpath,caption)
						VALUES ('$sliderid','$slider_path', '$caption')";
		$updateResult = $db->query($updateQuery);
	}
	$db->close();
 ?>
   



<html lang="en">
<head>
	<title>Update Slider Information</title>
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
			<?php if ($updateResult) :?>
			<form class="admin-form">
				<div class="admin-area">
					<p class="admin-title">
						Congratulation! You have updated a slider successfully!
					</p>

				</div>
			</form>
			<?php endif; ?>
			<?php if (!$updateResult) :?>
			<p class="admin-title">
				Please use form below to update slider information.
			</p>
			<form class="admin-form" action="admin_updateslider.php" enctype="multipart/form-data" method="post">
			<div class="admin-area">
				<table class="admin-table">
					<tr>
						<td>
							<label for="movieid">Slider ID:</label>
							<input type="text" name="sliderid" id="sliderid" placeholder="Slider ID" required>
						</td>
						<td>
							<label for="movieposter">Slider Picture:</label>
							<input type="file" name="sliderpath" id="sliderpath" accept="image/*" required>
						</td>
					</tr>
			   </table>

				<div class="text-area">
					<label for="moviecast">Caption:</label><br>
					<textarea name="caption" id="caption" placeholder="caption" required></textarea>
				</div>

				
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