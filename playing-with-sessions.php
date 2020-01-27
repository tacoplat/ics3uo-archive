<?php
// start the PHP session
session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PHP SESSIONS</title>
	<link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/76/flexed-biceps_emoji-modifier-fitzpatrick-type-3_1f4aa-1f3fc_1f3fc.png">
	<style>
		html {
			text-align: center;
			background-color: #7EBDC2;
			color: #231F20;
			font-family: 'Work Sans', sans-serif;
			padding: 40px;
			border: 25px solid #EFE6DD;
		}
	</style>
</head>
<body>
	<?php 
	// initialize wins and losses
	if ($_SESSION['wins'] == "") { 
		$_SESSION['wins'] = 0;
	}
	if ($_SESSION['losses'] == "") { 
		$_SESSION['losses'] = 0;
	}

	// title for the page
	echo "<h1>PHP SESSIONS</h1>";

	// check for reset 
	if ($_GET['reset'] == "yes") {
		$_SESSION['wins'] = 0;
		$_SESSION['losses'] = 0;
		echo "<p>The game has been reset.</p>";
	} else {
		// create a random number between 1 and 5.
		$randNum = rand(1,5);

		// show the random number
		echo "<p>The random number is <b>" . $randNum . "</b></p>";

		if ($randNum == 3) {
			echo "<p>The number equalled 3. YOU WIN!</p>";
			$_SESSION['wins']  = $_SESSION['wins']  + 1;
		} else {
			echo "<p>The number did NOT equal 3. YOU LOSE!</p>";
			$_SESSION['losses']  = $_SESSION['losses']  + 1;
		}
	}

	echo "<hr width='80%'><p>WINS: " . $_SESSION['wins'] . " |  LOSSES: " . $_SESSION['losses'] . "</p>";
	if ($_SESSION['losses'] != 0 or $_SESSION['wins'] != 0) {
			echo "<p>WIN PERCENTAGE: ". number_format(($_SESSION['wins'] / ($_SESSION['wins'] + $_SESSION['losses']) * 100), 2) . "% | LOSS PERCENTAGE: " . number_format(($_SESSION['losses'] / ($_SESSION['wins'] + $_SESSION['losses']) * 100), 2) ."%</p><hr width='80%'>";
		} else {
			echo "";
		}
	echo "<p>You have rolled the dice " . ($_SESSION['wins'] + $_SESSION['losses']) . " times.</p>";
	echo "<p><a href='playing-with-sessions.php'>ROLL AGAIN</a> | <a href='playing-with-sessions.php?reset=yes'>RESET</a></p>";
	?>
	<hr width="80%"><a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
</body>
</html>