<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Activity 2.5a - FOR Loops</title>
		<meta name="author" content="Andy Zhen">
		<meta name="description" content="Testing FOR Loops">
		<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
		<link href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/facebook/105/pretzel_1f968.png" rel="shortcut icon">
		<style>
			html {
				background-color: #CE796B;
				color: #495867;
				padding: 30px;
				font-family: 'Nunito', sans-serif;
				font-size: 1.0em;
			}
			.content {
				background-color: #ECC8AF;
				padding: 30px;
				border: 2px solid #E7AD99;
			}
			input {
				margin-top: 10px;
				margin-bottom: 15px;
			}
			.button {
				background-color: #C18C5D;
				font-size: 1.2em;
				font-family: 'Nunito', sans-serif;
				color: #495867;
				border-radius: 0.6em;
				margin-right: 10px;
				margin-top: 20px;
				padding: 5px;
			}
			.button:hover {
				background-color: #7B5A3C;
				font-size: 1.2em;
				font-family: 'Nunito', sans-serif;
				color: #495867;
				border-radius: 0.6em;
				margin-right: 10px;
				margin-top: 20px;
				padding: 5px;
			}
			p {
				width: 80%;
				margin-bottom: 20px;
			}
			.errormsg {
				color: darkred;
			}
			.linkcontainer {
				width: 70%;
				margin: auto;
				text-align: center;
				margin-bottom: 20px;
			}
			.links {
				color: white;
			}
			.links:hover, .links:visited {
				color: white;
				background-color: gray;
			}
			.currentlink {
				color: gray;
			}
		</style>
	</head>
	<body>
		<?php
			$min = $_POST['startvalue'];
			$max = $_POST['endvalue'];
			$increment = $_POST['incrementvalue'];
			$ghostvalue = $_POST['ghostvalue'];
			if ($_POST['reset']) {
					$min = "";
					$max = "";
					$increment = "";
					$ghostvalue = "";
				}
		?>
		<div class="linkcontainer">
			<a href="activity-2-5a.php" class="links">Activity 2.5a</a> | 
			<a class="currentlink">Activity 2.5b</a> | 
			<a href="activity-2-5c.php" class="links">Activity 2.5c</a> | 
			<a href="activity-2-5d.php" class="links">Activity 2.5d</a> | 
			<a href="activity-2-5e.php" class="links">Activity 2.5e</a>
		</div>
		<div class="content">
			<h1><u>FOR Loops</u></h1>
			<p><i>Select a starting point and an ending point to output the integer values between the points. <br>The starting number must be less than the ending number. <br>A "ghost" will output in between the first and second number.</i></p>
			<form action="activity-2-5b.php" name="inputs" method="post">
				<label for="startvalue">Start Value: </label>
				<input type="number" name="startvalue" value=<?echo $min;?>><br>
				<label for="endvalue">End Value: </label>
				<input type="number" name="endvalue" value=<?echo $max;?>><br>
				<label for="endvalue">Increment Value: </label>
				<input type="number" name="incrementvalue" value=<?echo $increment;?>><br>
				<label for="endvalue">GHOST Appears at Value: </label>
				<input type="number" name="ghostvalue" value=<?echo $ghostvalue;?>><br>
				<input type="submit" name="subBtn" value="Submit" class="button">
				<input type="submit" name="reset" value="Reset" class="button">
			</form>
			<?php	
				if($_POST['subBtn'] and $min < $max and is_numeric($min) and is_numeric($max) and is_numeric($increment) and is_numeric($ghostvalue) and $ghostvalue >= $min and $ghostvalue <= $max and ($min + $increment) <= $max ) {
					for($min = $min; $min <= $max; $min += $increment - 1) {
						if ($min == $ghostvalue) {
							echo $min . " - 👻 GHOST (boo!)<br>";
						} else {
							echo $min . "<br>";
						}
						$min++;
					}
				} elseif($_POST['subBtn'] and (!is_numeric($min) or !is_numeric($max) or !is_numeric($increment) or !is_numeric($ghostvalue))) {
					echo "<p class='errormsg'>Please ensure you have filled out all the fields.</p>";
				} elseif($_POST['subBtn'] and $min > $max) {
					echo "<p class='errormsg'>Please choose a starting value lesser than your ending value.</p>";
				} elseif($_POST['subBtn'] and $ghostvalue < $min or $ghostvalue > $max ) {
					echo "<p class='errormsg'>Please ensure the value at which the ghost appears is in between your starting and ending number parameters.</p>";
				} elseif($_POST['subBtn'] and ($min + $increment) > $max) {
					echo "<p class='errormsg'>Please ensure the sum of the starting number and the increment does not exceed the ending number.</p>";
				}
			?>
		</div>
		<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
	</body>
</html>