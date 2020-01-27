<!DOCTYPE html>
<html lang="en">
<head>
	<title>Activity 2.2b - Parsing URLs</title>
	<meta name="description" content="Parsing Variables from URLs">
	<meta name="author" content="Andy Zhen">
	<link rel="shortcut icon" href="https://emojis.wiki/emoji-pics/facebook/megaphone-facebook.png">
	<link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
	<style>
		body {
			padding: 0px 15px 0px 15px;
			background-color: #B2E6D4;
			font-family: 'Varela Round', sans-serif;
			font-size: 1.0em;
			color: #504136;
			line-height: 1.3;
		}
		p {
			color: #251E19;
			font-size: 0.9em;
		}
		form {
			margin-top: 5px;
			margin-bottom: 5px;
			width: 340px;
			text-align: left;
			margin: auto;
		}
		input, button {
			margin-top: 5px;
			margin-bottom: 5px;
			border: 2px solid #3C474B;
		}
		.container {
			padding: 20px;
			background-color: #689689;
			opacity: 0.8;
			margin: auto;
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
	</style>
</head>
<body>
	<a href="https://icsprogramming.ca/2019-2020/zhen4d333/" class="backarrow"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
	<div class="container">
		<h1>Working with Variables: Parsing URLs</h1>
		<hr size="2">
		<?php
		// learning to parse variables from URLs
		echo "<p>We are learning how to parse variables from URLs. The value of <b>x</b> is: " . $_GET['x'] . ", the value of <b>y</b> is: " . $_GET['y'] . ", and the <b>title</b> is: " . $_GET['title'] . ".<p>";
		echo "<h2 style='text-align: center;'><u>" . $_GET['title'] . "</u></h2>";
		echo "<table cellpadding='". $_GET['cellpadding'] . "' cellspacing='0' border='". $_GET['border'] . "' align='center' width='400' style='background-color:" . $_GET['bgcolor'] .  ";'>";
		?>
			<tr>
				<td>
					<h3><u>Mathematical Operation</u></h3>
				</td>
				<td>
					<h3><u>Result</u></h3>
				</td>
			</tr>
			<tr>
				<td>
					<p>x + y - 2 * z</p>
				</td>
				<td>
					<?php
						$x = $_GET['x'];
						$y = $_GET['y'];
						$z = $_GET['z'];
						$result1 = $x + $y - 2 * $z;
						echo "<p>" . $result1 . "</p>";
					?>
				</td>
			</tr>
			<tr>
				<td>
					<p>2x-4y+(3z-80)</p>
				</td>
				<td>
					<?php
						$x = $_GET['x'];
						$y = $_GET['y'];
						$z = $_GET['z'];
						$result2 = (2*$x)-(4*$y)+((3*$z)-80);
						echo "<p>" . $result2 . "</p>";
					?>
				</td>
			</tr>
			<tr>
				<td>
					<p>result of (row2,col2) + result of (row3,col2)</p>
				</td>
				<td>
					<?php
						$x = $_GET['x'];
						$y = $_GET['y'];
						$z = $_GET['z'];
						$result1 = $x + $y - 2 * $z;
						$result2 = (2*$x)-(4*$y)+((3*$z)-80);
						$result3 = $result1 + $result2;
						echo "<p>" . $result3 ."</p>";
					?>
				</td>
			</tr>
		</table><br>
		<form name="parsetable" action="activity-2-2b.php" method="get" align="center">
			X Value: <input type="number" name="x" placeholder="0"><br>
			Y Value: <input type="number" name="y" placeholder="0"><br>
			Z Value: <input type="number" name="z" placeholder="0"><br>
			Table Heading: <input type="text" name="title" placeholder="My Title"><br>
			Border Thickness (px): <input type="number" name="border" placeholder="1"><br>
			Cell Padding (px): <input type="number" name="cellpadding" placeholder="5"><br>
			Table Colour: <input type="color" name="bgcolor" placeholder="#689689"><br>
			<div style="text-align: center;">
				<input type="submit" name="subBtn" value="Parse">
				<button type="button" onclick="location.href= 'https://icsprogramming.ca/2019-2020/zhen4d333/activity-2-2b.php';">Reset</button>
			</div>
		</form>
	</div>
</body>