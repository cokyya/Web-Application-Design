<?php
	include("connectdb.php");
	$query1 = "SELECT movieid, moviename, poster FROM movieinfo";
	$result1 = $db->query($query1);
	$num_movies = $result1->num_rows;

	for ($i=0;$i<$num_movies;$i++) {
		$row1 = $result1->fetch_assoc();
		$posterpath[$i] = $row1['poster'];
		$movieid[$i] = $row1['movieid'];
		$moviename[$i] = $row1['moviename'];
	}
?>

<html lang="en">
<head>
	<title>Welcome to Cine</title>
	<meta charset="utf-8">
	<link rel="icon" href="images/movietime.ico">
	<link rel="stylesheet" type="text/css" href="css/movietime.css">
	<link rel="stylesheet" type="text/css" href="css/poster.css">
	<script type="text/javascript" src="js/library.js"></script>
</head>
<body>
	<div id="wrapper">
		<?php include "header.php"; ?>
		
        <?php include 'selectmovie_index.php';?>
		<div class="homepage-content">
			<?php
				for ($i=0;$i<$num_movies;$i++){
				echo '<div class="poster-container">';
					echo '<a href="showtime.php?movieid='.$movieid[$i].'&moviename='.$moviename[$i].'">';
						echo '<div class="homeposter">';
							echo '<div class="side">';
								echo '<img src="'.$posterpath[$i].'"  alt="'.$moviename[$i].'" width="265px" height="380px">';
							echo '</div>';
							echo '<div class="back">';
								echo '<a class="buyTicketBtn" href="showtime.php?movieid='.$movieid[$i].'&moviename='.$moviename[$i].'">Buy Tickets</a>';
							echo '</div>';
						echo '</div>';
					echo '</a>';
					echo '<a href="showtime.php?movieid='.$movieid[$i].'&moviename='.$moviename[$i].'">';
						echo '<div class="moviename">';
							echo $moviename[$i];
						echo '</div>';
					echo '</a>';
				echo '</div>';
				}
			?>
		</div>
		 
		<div mt-include-html="footer.html"></div>
	</div> <!-- End of Wrapper -->
<script>mt.includeHTML();</script>
</body>
</html>