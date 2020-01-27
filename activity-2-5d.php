<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Activity 2.5d - Temperature Conversions with DO WHILE Loops</title>
		<meta name="author" content="Andy Zhen">
		<meta name="description" content="Testing DO WHILE Loops">
		<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
		<link href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/facebook/105/pretzel_1f968.png" rel="shortcut icon">
		<style>
			html {
				background-color: #C2EABD;
				color: #011936;
				padding: 30px;
				font-family: 'Nunito', sans-serif;
				font-size: 1.0em;
			}
			.content {
				background-color: #F9DC5C;
				padding: 30px;
				border: 1px solid white;
			}
			input {
				margin-top: 10px;
				margin-bottom: 15px;
			}
			.button {
				background-color: #ED254E;
				font-size: 1.2em;
				font-family: 'Nunito', sans-serif;
				color: #465362;
				border-radius: 0.6em;
				margin-right: 10px;
				margin-top: 20px;
				padding: 5px;
			}
			.button:hover {
				background-color: #971832;
				font-size: 1.2em;
				font-family: 'Nunito', sans-serif;
				color: #465362;
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
				color: #971832;
			}
			.links:hover, .links:visited {
				color: #971832;
				background-color: gray;
			}
			table {
			 	border-collapse: collapse;
			}
			.currentlink {
				color: gray;
			}
			.formula {
				border: 1px solid black;
			}

		</style>
	</head>
	<body>
		<?php
			$first = $_POST['firstvalue'];
			$second = $_POST['secondvalue'];
			$decrement = $_POST['decrement'];
			if ($_POST['reset']) {
					$first = "";
					$second = "";
				}
		?>
		<div class="linkcontainer">
			<a href="activity-2-5a.php" class="links">Activity 2.5a</a> | 
			<a href="activity-2-5b.php" class="links">Activity 2.5b</a> | 
			<a href="activity-2-5c.php" class="links">Activity 2.5c</a> | 
			<a class="currentlink">Activity 2.5d</a> | 
			<a href="activity-2-5e.php" class="links">Activity 2.5e</a>
		</div>
		<div class="content">
			<h1><u>Temperature Conversions with DO WHILE Loops</u></h1>
			<p><i>Select a starting temperature (in Celsius) and an ending temperature to output a descending list of temperatures and their conversions.<br>The first number must be greater than the second number. <br></i></p>
			<img src="/2019-2020/zhen4d333/images/tempconvformulas.png" class="formula" alt="Temperature conversion formulas"><br>
			<form action="activity-2-5d.php" name="inputs" method="post">
				<label for="firstvalue">Starting Value (°C): </label>
				<input type="number" name="firstvalue" value=<?echo $first;?>><br>
				<label for="secondvalue">Ending Value (°C): </label>
				<input type="number" name="secondvalue" value=<?echo $second;?>><br>
				<label for="secondvalue">Decrement Value: </label>
				<input type="number" name="decrement" value=1><br>
				<input type="submit" name="subBtn" value="Submit" class="button">
				<input type="submit" name="reset" value="Reset" class="button">
			</form>
			<?php
				if($_POST['subBtn'] and $first >= $second and is_numeric($first) and is_numeric($second)) {
					echo "<table cellpadding='5' border='2'
					><tr><b><td>Degrees Celsius (°C)</td><td>Kelvin (K)</td><td>Degrees Fahrenheit (°F)</td></b></tr>";
					do {
						$kelvin = $first + 273;
						$fahrenheit = $first * 1.8 + 32;
						echo "<tr>";
						echo "<td>" . $first . "</td>";
						echo "<td>" . $kelvin . "</td>";
						echo "<td>" . $fahrenheit . "</td>";
						echo "</tr>";
						$first -= $decrement;
					} while ($first >= $second);
					echo "</table>";
				} elseif($_POST['subBtn'] and (!is_numeric($first) or !is_numeric($second))) {
					echo "<p class='errormsg'>Please ensure you have selected a starting value and an ending value.</p>";
				} elseif($_POST['subBtn'] and $first <= $second) {
					echo "<p class='errormsg'>Please ensure your first value is greater than or equal to your second value.</p>";
				}
			?>
		</div>
		<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
	</body>
</html>