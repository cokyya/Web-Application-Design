
	
<?php
	include("connectdb.php");

	$movieid = $_POST['movieid'];
	$moviename = $_POST['moviename'];
	$moviepg = $_POST['moviepg'];
	$moviecast = $_POST['moviecast'];
	$director = $_POST['director'];
	$movieruntime = $_POST['movieruntime'];
	$synopsis = $_POST['synopsis'];
	$poster = $_FILES['movieposter']['name'];
	$poster_path = "Movie Posters/$poster";
	$tmp_poster = $_FILES['movieposter']['tmp_name'];

	if ($movieid && $moviename) {

		$updateQuery = "INSERT INTO movieinfo (movieid,moviename,PG,cast,director,runtime,synopsis,poster)
						VALUES ('$movieid', '$moviename','$moviepg' ,'$moviecast', '$director' ,'$movieruntime','$synopsis','$poster_path')";
		$updateResult = $db->query($updateQuery);
	}
	$db->close();
 ?>
   



<html lang="en">
<head>
	<title>Update Movie Page</title>
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
						Congratulation! You have updated a movie successfully!
					</p>
					<p class="admin-title">
						Click Next to update Time Slot.
					</p>
					<nav class="admin nav">
					<ol>
						<li><a href="admin_updateslot.php">Next</a></li>
					</ol>
					</nav>
				</div>
			</form>
			<?php endif; ?>
			<?php if (!$updateResult) :?>
			<p class="admin-title">
				Please use form below to update movie info.
			</p>
			<form class="admin-form" action="admin_updatemovie.php" enctype="multipart/form-data" method="post">
			<div class="admin-area">
				<table class="admin-table">
					<tr>
						<td>
							<label for="movieid">Movie ID:</label>
							<input type="text" name="movieid" id="movieid" placeholder="Movie ID" required>
						</td>
						<td>
							<label for="moviename">Movie Name:</label>
							<input type="text" name="moviename" id="moviename" placeholder="Movie Name" required>
						</td>
					</tr>
					<tr>
						<td>
							<label for="moviepg">PG:</label>
							<input type="text" name="moviepg" id="moviepg" placeholder="PG" required>
						</td>
						<td>
							<label for="director">Director:</label>
							<input type="text" name="director" id="director" placeholder="Director" required>
						</td>
					</tr>
					<tr>
						<td>
							<label for="movieruntime">Run Time:</label>
							<input type="number" name="movieruntime" id="movieruntime" placeholder="Run Time" required>
						</td>
						<td>
							<label for="movieposter">Movie Poster:</label>
							<input type="file" name="movieposter" id="movieposter" accept="image/*" required style="width: 250px;">
						</td>
					</tr>
				</table>

				<div class="text-area">
					<label for="moviecast">Cast:</label><br>
					<textarea name="moviecast" id="moviecast" placeholder="Cast" required></textarea>
				</div>

				<div class="text-area">
					<label for="moviecast">Synopsis:</label><br>
					<textarea name="synopsis" id="synopsis" placeholder="Synopsis" required></textarea>
				</div>
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