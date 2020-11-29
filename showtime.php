<?php
	include("connectdb.php");
	$movieid = $_GET['movieid'];

	$query1 = "SELECT moviename, PG, cast, director, runtime, synopsis,poster
			   from movieinfo
			   where movieid = '$movieid'";
	$result1 = $db->query($query1);
	$movieinfo = $result1->fetch_assoc();
	$moviename_info = $movieinfo['moviename'];
	$moviepg = $movieinfo['PG'];
	$moviecast = $movieinfo['cast'];
	$moviedirector = $movieinfo['director'];
	$movieruntime = $movieinfo['runtime'];
	$moviesynopsis = $movieinfo['synopsis'];
	$movieposter = $movieinfo['poster'];

	$query2 = "SELECT DISTINCT showdate
			   from showtime
			   where movieid = '$movieid'
			   order by showdate";
	$result2 = $db->query($query2);
	$num_showdate = $result2->num_rows;

	$k = 0;

	for ($i=0;$i<$num_showdate;$i++){
		$row2 = $result2->fetch_assoc();
		$showdate[$i]=$row2['showdate'];
		$query3 = "SELECT timeslot
				   from showtime
				   where movieid = '$movieid' and showdate = '$showdate[$i]'";

		$result3 = $db->query($query3);
		$num_timeslot[$i] = $result3->num_rows;

		for ($j=0;$j<$num_timeslot[$i];$j++){
			 $row3 = $result3->fetch_assoc();
			 $timeslot[$k]=$row3['timeslot'];
			 $k = $k+1;
		}
	}
	$db->close();
?>
<html lang="en">
<head>
	<title>Movie Detail</title>
	<meta charset="utf-8">
	<link rel="icon" href="images/movietime.ico">
	<link rel="stylesheet" type="text/css" href="css/movietime.css">
	<script type="text/javascript" src="js/library.js"></script>
</head>
<body>
<div id="wrapper">
	<?php include "header.php"; ?>
	<?php include 'selectmovie.php';?>
	<div class="main">
		<form action="seatselection.php" method="post">
			<div class="movieinfo">
				<h1><?php echo $moviename_info ?></h1>
				<?php
					session_start();
					$_SESSION['movieselect']= $moviename_info;
				?>
				<p class="row"><?php echo "(".$moviepg.")" ?></p>
				<hr>
				<div class="poster">
					<?php
						echo '<img id="'.$movieid.'" src="'.$movieposter.'" border="0" alt ="'.$moviename.'" width="350" height="450">';
						session_start();
						$_SESSION['movieposter']= $movieposter;
					?>
				</div>
				<div class="detail">
					<p class="head">CAST</p>
					<p><?php echo $moviecast ?></p>
					<br>
					<p class="head">DIRECTOR</p>
					<p><?php echo $moviedirector ?></p>
					<br>
					<p class="head">RUN TIME</p>
					<p><?php echo $movieruntime ?>mins</p>
					<br>
					<p class="head">SYNOPSIS</p>
					<p><?php echo $moviesynopsis ?></p>
				</div>
			</div>
			<div class="showtimes">
				<h1>SHOWTIMES</h1>
				<hr>
				<div class="timeschedule">
					<p class="time">Select Time Slot</p>
					<?php
						$k = 0;
						for ($i=0;$i<$num_showdate;$i++){
							echo '<br><br><li class="timeslot">'.$showdate[$i].'</li><br><br>';

							for ($j=0;$j<$num_timeslot[$i];$j++){
								echo '<li class="timeslot"><a class="timebutton" href="seatselection.php?date='.$showdate[$i].'&showtime='.$timeslot[$k].'">'.$timeslot[$k].'</a></li>';
								$k = $k+1;
							}
						}
					?>
				</div>
			</div>
		</form>
	</div> <!-- End of Main -->
	<hr>
	<div mt-include-html="footer.html"></div>
</div>
<script>mt.includeHTML();</script>
</body>
</html>