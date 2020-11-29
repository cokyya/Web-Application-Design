<!-- Select Movie -->
<?php
	include("connectdb.php");
?>
<div class="index_selectmovie">
<div class="index_slider">
<?php include "slider.php";?>
</div>
<div class="index_selectmovie_window">
<form action="seatselection.php" method="get">
	<select id="movienames" name="movienames" required >
		<option value="">Please Select Movie</option>
		<?php
			$query1 = "SELECT moviename FROM movieinfo";

			$result1 = $db->query($query1);
			$num_movies = $result1->num_rows;

			for ($i=0;$i<$num_movies;$i++) {
				$row1 = $result1->fetch_assoc();
				$moviename[$i] = $row1['moviename'];
			}
			for ($i=0;$i<$num_movies;$i++){
				echo '<option value="'.$moviename[$i].'" id="'.$moviename[$i].'">'.$moviename[$i].'</option>';
			}
			$db->close();
		?>
	</select>
    <br>
	<br>
	
    <select id="moviedates" name="date" required>
	     <option value="">Please Select Date</option> 
	</select>
	<br>
	<br>
	
	<select id="movieslots" name="showtime" required>
		<option value="">Please Select Time</option>
	</select>
	<br>
	<br>
	
	<div class="book" id="bookNow">
	     <button type="submit" name="submit" class="btn" value="Submit">Book Now</button>
	</div>
</form>

</div>
</div>
<br>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>
<script type="text/javascript">
	$("#movienames").change(function() {
		movie_name = encodeURI($("#movienames").val());
		$("#moviedates").load("getdates.php?moviename=" + movie_name);
	});
	
	$("#moviedates").change(function() {
		movie_name = encodeURI($("#movienames").val());
		movie_date = encodeURI($("#moviedates").val());
		$("#movieslots").load("getslots.php?moviename=" + movie_name + "&moviedate=" + movie_date);
	});
	$("#movieslots").change(function() {
		movie_name = encodeURI($("#movienames").val());
		movie_date = encodeURI($("#moviedates").val());
		movie_slot = encodeURI($("#movieslots").val());
		$("#bookNow").load("getbooknow.php?moviename=" + movie_name + "&moviedate=" + movie_date + "&movieslot=" + movie_slot);
	});
</script>
