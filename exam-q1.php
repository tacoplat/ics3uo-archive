<!DOCTYPE html>
<html>
	<head>
		<title>ICS Exam Q1 - Andy Zhen</title>
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
				margin-top: 20px;
				margin-bottom: 20px;
			}
		</style>
	</head>
	<body>
		<h1>ICS3UO Exam: Troubleshooting</h1>
		<?php
			echo "<form action='exam-q1.php' method='POST'>";
			echo "Guess a # between 1 and 10: <br><input type='text' name='num1' value='" . $_POST['num1'] . "'></input><br />";
			echo "<input type='submit' class='button spacing' name='subBtn' value='Guess Now!'></input>";

			if ($_POST['subBtn']) {
				$num1 = $_POST['num1'];
				if($num1 >= 1 and $num1 <= 10) {
					echo "<p>You guessed #" . $num1 . "</p>";
					if ($_POST['num1'] == 7) {
						echo "<p>You guessed correctly!</p>";
					} else {
						echo "<p>You did NOT guess correctly!</p>";
					}
				} else {
					echo "<p>Please enter a number between 1 and 10.</p>";
				}
			}
			echo "</form>";
		?>
		<h4>Program Errors: </h4>
		<ul>
			<li>There is a semicolon missing from the first echo statement</li>
			<li>The form redirects to google.ca</li>
			<li>The value parameter for the input field expects a GET variable, when the form uses the POST method.</li>
			<li>In the if statement, the wrong variable name is used ($_POST['submitButton'] instead of $_POST['subBtn'])</li>
			<li>The $num1 variable is undeclared (I initialized it in my fixes)</li>
			<li>Again, in the if statement, a GET variable is used instead of a POST one.</li>
			<li>The if statement uses the '=' assignment operator instead of the '==' comparison operator</li>
			<li>There's a missing left curly bracket after the else statement.</li>
			<li>Missing error checking.</li>
			<li>There is no closing tag for the form.</li>
		</ul>
		<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
	</body>
</html>