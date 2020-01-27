<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Activity 2.5e - Population Growth DO WHILE Loops</title>
		<meta name="author" content="Andy Zhen">
		<meta name="description" content="Testing DO WHILE Loops">
		<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
		<link href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/facebook/105/pretzel_1f968.png" rel="shortcut icon">
		<style>
			html {
				background-color: #63E2C6;
				color: #C7F9F8;
				padding: 30px;
				font-family: 'Nunito', sans-serif;
				font-size: 1.0em;
			}
			.content {
				background-color: #399E5A;
				padding: 30px;
				border: 1px solid #CED0EB;
			}
			input {
				margin-top: 10px;
				margin-bottom: 15px;
			}
			.button {
				background-color: #5ABCB9;
				font-size: 1.2em;
				font-family: 'Nunito', sans-serif;
				color: #C7F9F8;
				border-radius: 0.6em;
				margin-right: 10px;
				margin-top: 20px;
				padding: 5px;
			}
			.button:hover {
				background-color: #295655;
				font-size: 1.2em;
				font-family: 'Nunito', sans-serif;
				color: #C7F9F8;
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
			.formula {
				border: 1px solid black;
			}
		</style>
	</head>
	<body>
		<?php
			$p_o = $_POST['initialpop'];
			$r = $_POST['growthrate'];
			$t_1 = $_POST['starttime'];
			$t_2 = $_POST['endtime'];
			if ($_POST['reset']) {
					$p_o = "";
					$r = "";
					$t_1 = "";
					$t_2 = "";
				}
		?>
		<div class="linkcontainer">
			<a href="activity-2-5a.php" class="links">Activity 2.5a</a> | 
			<a href="activity-2-5b.php" class="links">Activity 2.5b</a> | 
			<a href="activity-2-5c.php" class="links">Activity 2.5c</a> | 
			<a href="activity-2-5d.php" class="links">Activity 2.5d</a> | 
			<a class="currentlink">Activity 2.5e</a>
		</div>
		<div class="content">
			<h1><u>Population Simulation with DO WHILE Loops</u></h1>
			<p><i>Population growth within a society can be calculated using the equation displayed below, assuming the rate of growth remains constant over time.<br>p_o represents the initial population, r represents the rate of growth (as a percentage), t_1 and t_2 represent the starting and ending time (in years).<br>To use this form, please fill out the following fields below.</i></p>
			<img src="/2019-2020/zhen4d333/images/popgrowthsim.png" class="formula">
			<form action="activity-2-5e.php" name="inputs" method="post">
				<label for="initialpop">Initial Population: </label>
				<input type="number" name="initialpop" value=<?echo $p_o;?>><br>
				<label for="growthrate">Growth Rate (%): </label>
				<input type="number" name="growthrate" value=<?echo $r;?>><br>
				<label for="starttime">Starting Year: </label>
				<input type="number" name="starttime" value=<?echo $t_1;?>><br>
				<label for="endtime">Ending Year: </label>
				<input type="number" name="endtime" value=<?echo $t_2;?>><br>
				<input type="submit" name="subBtn" value="Show the Growth" class="button">
				<input type="submit" name="reset" value="Reset" class="button">
			</form>
			<?php	
				if($_POST['subBtn']) {
					if ($p_o <= 0 or $r <= 0) {
						echo "<p class='errormsg'>Your initial population and/or growth rate cannot be negative.</p>";
					} else {
						if ($t_1 <= $t_2 and is_numeric($p_o) and is_numeric($r) and is_numeric($t_1) and is_numeric($t_2)) {
							$time = 0;
							do {
								$population = number_format($p_o * exp(($r / 100) * ($time)), 0);
								echo "<p>In the year " . $t_1 . ", the population would be " . $population . ".</p>";
								$t_1++;
								$time ++;
							} while ($t_1 <= $t_2);
						} elseif(!is_numeric($p_o) or !is_numeric($r) or !is_numeric($t_1) or !is_numeric($t_2)) {
							echo "<p class='errormsg'>Please ensure you have filled out all the fields</p>";
						} elseif($t_1 > $t_2) {
							echo "<p class='errormsg'>Please ensure the starting time is less than the ending time.</p>";
						}
					}
				}
			?>
		</div>
		<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a><br>
	</body>
</html>