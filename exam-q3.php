<!DOCTYPE html>
<html>
	<head>
		<title>ICS Exam Q3 - Andy Zhen</title>
		<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
		<style>
			html {
				padding: 10px;
				margin: 0;
				background-color: #EF959D;
				font-family: 'Nunito', sans-serif;
			}
			body {
				background-color: white;
				padding: 20px;
			}
			.button {
				font-family: 'Nunito', sans-serif;
				font-size: 18px;
				background-color: #FCDDBC;
				color: #69585F;
				border-radius: 0.6em;
			}
			.button:hover {
				background-color: #B8A189;
			}
			.spacing {
				margin-top: 10px;
				margin-bottom: 10px;
			}
		</style>
	</head>
</html>
<body>
	<h1>ICS3UO Exam: Error, Error!</h1>
	<?
		$length = $_POST['length'];
		$width = $_POST['width'];
		$height = $_POST['height'];
	?>
	<form name="volume" action="exam-q3.php" method="post">
		<label for='length'>Length (m): </label>
		<input type="text" class='spacing' name="length" value=<?echo $length?>><br>
		<label for='width'>Width (m): </label>
		<input type="text" class='spacing' name="width" value=<?echo $width?>><br>
		<label for='Height'>Height (m): </label>
		<input type="text" class='spacing' name="height" value=<?echo $height?>><br>
		<input type="submit" name="subBtn" class='spacing button'>
	</form>
	<?php
		function calcVolume($length,$width,$height) {
		     // calculate the volume and return it
		     $volume = $length*$width*$height;
		     return $volume;
		}
		if($_POST['subBtn']) {
			if(is_numeric($length) and is_numeric($width) and is_numeric($height)) {
				if($length>=0 and $width>=0 and $height>=0) {
					echo "The volume of the room is " . calcVolume($length,$width,$height) . " m<sup>3</sup>.";
					if($length == 0 or $width ==0 or $height ==0){
						echo "<br>It's a little strange that your room is 2-dimensional";
					}
				} else {
					echo "One or more of your dimensions is less than zero. Dimensions can't be negative!";
				}
			} else {
				echo "One or more of your dimensions is not a number. Please ensure all of the dimensions are numerical.";
			}
		}
	?>
	<h4>Program Errors: </h4>
	<ul>
		<li>The parameters for the calcVolume() function were listed as $L, $W and $H, when the volume calculation takes $length, $width and $height. I have changed the function parameters to match the variables in the calculation.</li>
		<li>For the form, error checking was added to ensure all inputs are positive and numerical</li>
	</ul>
	<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
</body>