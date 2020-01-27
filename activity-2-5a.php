<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Activity 2.5a - WHILE Loops</title>
		<meta name="author" content="Andy Zhen">
		<meta name="description" content="Testing WHILE Loops">
		<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
		<link href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/facebook/105/pretzel_1f968.png" rel="shortcut icon">
		<style>
			html {
				background-color: #466365;
				color: #36363F;
				padding: 30px;
				font-family: 'Nunito', sans-serif;
				font-size: 1.0em;
			}
			.content {
				background-color: #B49A67;
				padding: 30px;
				border: 1px solid #CED0EB;
			}
			input {
				margin-top: 10px;
				margin-bottom: 15px;
			}
			.button {
				background-color: #BAA5FF;
				font-size: 1.2em;
				font-family: 'Nunito', sans-serif;
				color: #36363F;
				border-radius: 0.6em;
				margin-right: 10px;
				margin-top: 20px;
				padding: 5px;
			}
			.button:hover {
				background-color: #554B74;
				font-size: 1.2em;
				font-family: 'Nunito', sans-serif;
				color: #36363F;
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
			if ($_POST['reset']) {
					$min = "";
					$max = "";
				}
		?>
		<div class="linkcontainer">
			<a class="currentlink">Activity 2.5a</a> | 
			<a href="activity-2-5b.php" class="links">Activity 2.5b</a> | 
			<a href="activity-2-5c.php" class="links">Activity 2.5c</a> | 
			<a href="activity-2-5d.php" class="links">Activity 2.5d</a> | 
			<a href="activity-2-5e.php" class="links">Activity 2.5e</a>
		</div>
		<div class="content">
			<h1><u>WHILE Loops</u></h1>
			<p><i>Select a starting point and an ending point to output the integer values between the points. <br>The starting number must be less than 3, while the ending number must be greater than 7. <br>There are special statements for some of the integers.</i></p>
			<form action="activity-2-5a.php" name="inputs" method="post">
				<label for="startvalue">Start Value: </label>
				<input type="number" name="startvalue" value=<?echo $min;?>><br>
				<label for="endvalue">End Value: </label>
				<input type="number" name="endvalue" value=<?echo $max;?>><br>
				<input type="submit" name="subBtn" value="Submit" class="button">
				<input type="submit" name="reset" value="Reset" class="button">
			</form>
			<?php	
				if($_POST['subBtn'] and $min < $max and $min <= 3 and $max >= 7 and is_numeric($min) and is_numeric($max)) {
					while($min <= $max) {
						if ($min == 3) {
							echo $min . " - yay, this is number three!<br>";
						} else if($min == 7) {
							echo $min . " - lucky number seven!<br>";
						} else {
							echo $min . "<br>";
						}
						$min++;
					}
				} elseif($_POST['subBtn'] and (!is_numeric($min) or !is_numeric($max))) {
					echo "<p class='errormsg'>Please ensure you have selected a starting value and an ending value.</p>";
				} elseif($_POST['subBtn'] and $min > 3) {
					echo "<p class='errormsg'>Please choose a starting value lesser than 3.</p>";
				} elseif($_POST['subBtn'] and $max < 7) {
					echo "<p class='errormsg'>Please choose an ending value greater than 7.</p>";
				}
			?>
		</div>
		<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a><br>
	</body>
</html>