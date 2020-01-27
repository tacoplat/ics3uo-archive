<!DOCTYPE html>
<html>
	<head>
		<title>ICS Exam Q5 - Andy Zhen</title>
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
	<body>
		<h1>ICS3UO Exam: Bouncy Ball</h1>
		<?
		$h = $_POST['initial'];
		$y = $_POST['min'];
		?>
		<form name="ball" action="exam-q5.php" method="post">
			<label for="initial">Initial height (m): </label>
			<input type="text" class='spacing' name="initial" value=<?echo $h;?>><br>
			<label for="min">Minimum height (m): </label>
			<input type="text" class='spacing' name="min" value=<?echo $y;?>><br>
			<input type="submit" class='spacing button' name="subBtn">
		</form>
		<?
			if($_POST['subBtn']) {
				$init = $h;
				if(is_numeric($h) and is_numeric($y)) {
					if($h >= 1 and $y > 0) {
						if($h > $y) {
							while($h > $y) {
								echo $h . " m<br>";
								$count++;
								$h *= (2/3);
							}
							echo $h . " m<br>";
							echo "<p>After being dropped from an initial height of " . $init . "m, the ball goes below the minimum value of " . $y . "m after " . $count . " bounces.</p>";
						} else {
							echo "<p>Dropping height must be greater than minimum height.</p>";
						}
					} else {
						echo "<p>Dropping height must be greater than or equal to 1m and the minimum height must be greater than 0m.</p>";
					}
				} else {
					echo "<p>Values must be numerical.</p>";
				}
			}
		?>
		<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
	</body>
</html>