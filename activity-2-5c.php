<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Activity 2.5a - Nested FOR Loops</title>
		<meta name="author" content="Andy Zhen">
		<meta name="description" content="Testing Nested FOR Loops">
		<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
		<link href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/facebook/105/pretzel_1f968.png" rel="shortcut icon">
		<style>
			html {
				background-color: #3E2F5B;
				color: #000F08;
				padding: 30px;
				font-family: 'Nunito', sans-serif;
				font-size: 1.0em;
			}
			.content {
				background-color: #E0CA3C;
				padding: 30px;
				border: 1px solid white;
			}
			input {
				margin-top: 10px;
				margin-bottom: 15px;
			}
			.button {
				background-color: #F34213;
				font-size: 1.2em;
				font-family: 'Nunito', sans-serif;
				color: #000F08;
				border-radius: 0.6em;
				margin-right: 10px;
				margin-top: 20px;
				padding: 5px;
			}
			.button:hover {
				background-color: #591807;
				font-size: 1.2em;
				font-family: 'Nunito', sans-serif;
				color: #000F08;
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
			$first = $_POST['firstvalue'];
			$second = $_POST['secondvalue'];
			if ($_POST['reset']) {
					$first = "";
					$second = "";
				}
		?>
		<div class="linkcontainer">
			<a href="activity-2-5a.php" class="links">Activity 2.5a</a> | 
			<a href="activity-2-5b.php" class="links">Activity 2.5b</a> | 
			<a class="currentlink">Activity 2.5c</a> | 
			<a href="activity-2-5d.php" class="links">Activity 2.5d</a> | 
			<a href="activity-2-5e.php" class="links">Activity 2.5e</a>
		</div>
		<div class="content">
			<h1><u>Nested FOR Loops</u></h1>
			<p><i>Select a first integer and a second integer to output a series of addition statements. <br>The first number must be greater than 1, while the second number must be lesser than 9. <br></i></p>
			<form action="activity-2-5c.php" name="inputs" method="post">
				<label for="firstvalue">First Value: </label>
				<input type="number" name="firstvalue" value=<?echo $first;?>><br>
				<label for="secondvalue">Second Value: </label>
				<input type="number" name="secondvalue" value=<?echo $second;?>><br>
				<input type="submit" name="subBtn" value="Submit" class="button">
				<input type="submit" name="reset" value="Reset" class="button">
			</form>
			<?php	
				if($_POST['subBtn'] and $first <= $second and $first > 1 and $second < 10 and is_numeric($first) and is_numeric($second)) {
					for ($i=1; $i <= $first; $i++) { 
						for ($p=1; $p <= $second; $p++) { 
							echo $i . " + " . $p . " = " . ($i + $p) . "<br>";
						}
					}
				} elseif($_POST['subBtn'] and (!is_numeric($first) or !is_numeric($second))) {
					echo "<p class='errormsg'>Please ensure you have selected a first value and a second value.</p>";
				} elseif($_POST['subBtn'] and $first <= 1) {
					echo "<p class='errormsg'>Please choose a first value greater than 1.</p>";
				} elseif($_POST['subBtn'] and $first >= $second) {
					echo "<p class='errormsg'>Please ensure your first value is less than your second value.</p>";
				} elseif($_POST['subBtn'] and $second >= 10) {
					echo "<p class='errormsg'>Please choose a second value lesser than 10.</p>";
				}
			?>
		</div>
		<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
	</body>
</html>