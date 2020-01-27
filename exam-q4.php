<!DOCTYPE html>
<html>
	<head>
		<title>ICS Exam Q4 - Andy Zhen</title>
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
		<h1>ICS3UO Exam: Speeding Ticket</h1>
		<?
		$limit = $_POST['limit'];
		$speed = $_POST['speed'];
		?>
		<form name="speeding" action="exam-q4.php" method="post">
			<label>Speed limit (km/h): </label>
			<input type="text" class='spacing' name="limit" value=<?echo $limit;?>><br>
			<label>Vehicle speed (km/h): </label>
			<input type="text" class='spacing' name="speed" value=<?echo $speed;?>><br>
			<input type="submit" class='spacing button' name="subBtn">
		</form>
		<?	
			function speedingTicket($limit, $speed) {
				$fine = 20 + 5 * ($speed - $limit);
				return $fine;
			}
			if($_POST['subBtn']) {
				if(filter_var($speed, FILTER_VALIDATE_INT) and filter_var($limit, FILTER_VALIDATE_INT)) {
					if($speed > 0 and $limit > 0) {
						if($speed > $limit) {
							echo "<p>The fine is $" . speedingTicket($limit, $speed) . ".</p>";
						} else {
							echo "<p>Car was not speeding, no ticket issued.</p>";
						}
					} else {
						echo "<p>You should not be going negative speeds on public roads.</p>";
					}
				} else {
					echo "<p>Please use integer speed values (no characters, no decimals).</p>";
				}
			}
		?>
		<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
	</body>
</html>