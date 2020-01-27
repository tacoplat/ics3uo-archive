<!DOCTYPE html>
<html lang="en">
<head>
	<title>Activity 2.2 - Working With PHP Variables</title>
	<meta name="description" content="PHP Variables Basics">
	<meta name="author" content="Andy Zhen">	
	<link rel="shortcut icon" href="https://images.emojiterra.com/google/android-pie/512px/1f95d.png">
	<link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
	<style>
		body {
			padding: 15px;
			background-color: #94C9A9;
			font-family: 'Varela Round', sans-serif;
			font-size: 1.0em;
			color: #4C506B;
			line-height: 1.3;
		}
		h1 {
			color: #37394C;
			font: bold;
		}
		h2 {
			color: #37394C;
			font: bold;
		}
		#container {
			padding: 20px;
			background-color: #D0EFBC;
			opacity: 0.8;
			margin:auto;
			width: 75%;
			border-style: solid;
			border-width: 2px;
			border-color: #37394C;
		}
		.backarrow {
			float:left;
			display: inline-block;
			opacity: 0.7;
		}
		input, button {
			font-size: 0.8em;
			border: 2px solid #885053;
			padding: 5px;
			margin-bottom: 5px;
			font-family: 'Varela Round', sans-serif;
		}
		tr, td {
			vertical-align: top;
			width: 50%;
		}
		.result {
			color: #D5573B;
		}
	</style>
</head>
<body>
	<a href="https://icsprogramming.ca/2019-2020/zhen4d333/" class="backarrow"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
	<div id="container">
		<h1>Working with PHP Variables: The Basics</h1>
		<table cellpadding="10" border="2px" cellspacing="4" style="border-color:#885053;">
			<tr>
				<td>
					<form name="perimeter" action="activity-2-2.php" method="post">
					<h2>Calculate Perimeter of a Rectangle:</h2>
					<p><i>Find the perimeter of a rectangle by inputting the length and width variables.</i></p>
					<img src="/2019-2020/zhen4d333/images/rectangle.png" height="200px"><br>
						Length (l): <input type="number" min="0" name="length" placeholder="0"><br>
						Width (w): <input type="number" min="0" name="width" placeholder="0"><br>
						<input type="submit" name="submitPer" value="Calculate"><br>
						<?php
						if ($_POST['submitPer']) {	
							$l = $_POST['length'];
							$w = $_POST['width'];
							$p = (2 * $l) + (2 * $w);

							echo "<p class='result'>The perimeter of a rectangle with a length of <b>". $l . "</b> units, and a width of <b>" . $w . "</b> units is <b>" . $p . "</b> units.</p>";
							}
						?>
					</form>
				</td>
				<td>
					<form name="area" action="activity-2-2.php" method="post">
						<h2>Calculate Area of a Triangle:</h2>
						<p><i>Find the area of a triangle by inputting the base and height variables.</i></p>
						<img src="/2019-2020/zhen4d333/images/triangle.png" height="200px"><br>
						Base (b): <input type="number" min="0" name="base" placeholder="0"><br>
						Height (h): <input type="number" min="0" name="height" placeholder="0"><br>
						<input type="submit" name="submitAre" value="Calculate"><br>
						<?php
							if ($_POST['submitAre']) {	
								$b = $_POST['base'];
								$h = $_POST['height'];
								$a = ($b * $h)/2;

								echo "<p class='result'>The area of a triangle with a base of <b>". $b . "</b> units, and a height of <b>" . $h . "</b> units is <b>" . $a . "</b> square units.</p>";
								}
						?>
					</form>
				</td>
			</tr>
			<tr>
				<td>
					<form name="sound" action="activity-2-2.php" method="post">
						<h2>Calculate Speed of Sound:</h2>
						<p><i>Find the speed of sound based on the ambient room temperature (°C).</i></p>
						Temperature (°C):
						<select name="temperature">
							<option value="-10">-10°C</option>
							<option value="0">0°C</option>
							<option value="10">10°C</option>
							<option value="20">20°C</option>
							<option value="30">30°C</option>
						</select><br><br>
						<input type="submit" name="submitSpe" value="Calculate"><br>
							<?php
							if ($_POST['submitSpe']) {	
								$t = $_POST['temperature'];
								$v = (0.6 * $t) + 332;

								echo "<p class='result'>The speed of sound at <b>". $t . "°C</b> is " . $v . "</b> m/s.</p>";
								}
							?>
					</form>
				</td>
				<td>
					<form name="magic" action="activity-2-2.php" method="post">
						<h2>Magic Number:</h2>
						<p><i>Enter a number, and a magic number will be generated based of a series of secret operations.</i></p>
						<input type="number" name="magicnumber" placeholder="0"><br>
						<input type="submit" name="submitMag" value="Calculate"><br>
						<?php
							if ($_POST['submitMag']) {	
								$x = $_POST['magicnumber'];
								$result2 = ((($x + 2) * 3) - 6) * 3;

								echo "<p class='result'>Your magic number is <b>". $result2 . "</b>.</p>";
								}
							?>
					</form>
				</td>
			</tr>
			<tr>
				<form action="activity-2-2" method="post">
					<td colspan="2" align="center" valign="center">
						<button type="button" onClick="window.location.href=window.location.href">Reset</button>
					</td>
				</form>
			</tr>
		</table>
	</div>
</body>
</html>