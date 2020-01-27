<!DOCTYPE html>
<html>
	<head>
		<title>ICS Exam Q2 - Andy Zhen</title>
		<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
		<style type="text/css">
			#textbox {
				width: 400px;
			}
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
				margin-top: 20px;
				margin-bottom: 20px;
			}
		</style>
	</head>
	<body>
		<h1>ICS3UO Exam: What's the average?</h1>
		<?
		$input = $_POST['numString'];
		if(!isset($input)){$input = "89,45,99,56,88,67,78,79,83";}?>
		<form name="average" method="post" action="exam-q2.php">
			<label for="numString">String of numbers (separated by commas): </label>
			<input id="textbox" type="text" name="numString" value=<?echo $input;?>><br>
			<input type="submit" name="subBtn" class='button spacing'>
		</form>
		<?php
			if($_POST['subBtn']) {
				$numbers = explode(",",$input);
				$numbers = array_map('trim', $numbers);
				for($i = 0; $i < sizeof($numbers); $i++) {
					if(!is_numeric($numbers[$i])) {
						$check++;
					}
				}
				if($check == 0) {
					$sum = 0;
					for($i = 0; $i < sizeof($numbers); $i++) {
						if($i != (sizeof($numbers) - 1)) {
							echo $numbers[$i] . " + ";
						} else {
							echo $numbers[$i];
						}
						$sum = $sum + $numbers[$i];
					}
					$average = ($sum / sizeof($numbers));
					echo "<p>The sum of the numbers is: " . $sum . "</p>";
					echo "<p>The average of the numbers is: " . $average . "</p>";
				} else {
					echo "<p>Characters detected!</p>";
				}
			}
		?>
		<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
	</body>
</html>