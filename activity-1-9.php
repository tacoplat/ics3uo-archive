
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lesson - HTML Forms</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/facebook/200/automobile_1f697.png">

	<!-- styles can go below -->
	<style>	
		body {
			padding: 0;
			margin: 0;
			font-family: 'Mansalva', cursive;
			font-size: 1.0em;
			width: 100%;
			background: url("http://icsprogramming.ca/test/ferrari.jpg");
			background-size: cover;
			text-align: center;
			color: red;
		}
		form {
			position: relative;
			padding: 20px;
		    margin-left: auto;
			margin-right: auto;
			width: 50%;
			background: rgba(255,255,255,0.9);
			text-align: left;
		}
		input, select, textarea {
			font-size: 1.4em;
			border: 1px solid #999999;
			padding: 5px;
			border-radius: 0.5em;
			outline: none;
			margin: 5px;
		}
		option {
			font-family: 'Mansalva', cursive;
			font-size: 12px;
		}

	</style>
</head>
<body>
<!-- PHP extension code goes below this -->

<?php
// only show the information if the button named "subButton" has been pressed
if ($_POST['subButton']) {
	// set the variable with the submitted value
	$firstName = $_POST['fname'];
    $password = $_POST['pwd'];
    $hideme = $_POST['hideme'];
    $car = $_POST['car'];
    $gender = $_POST['sex'];

	// display the user inputs to the screen
	echo "<p>Your first name is <b>" . $firstName . "</b>.</p>";
	echo "<p>You are a <b>" . $gender . "</b></p>";
    echo "<p>Your password is <b>"  . $password . "</b>.</p>";
    echo "<p>The answer to the universe is: <b>" . $hideme . "</b>.</p>";
    echo "<p>You chose the: <b>" . $car . "</b>.</p>";
}
?>

<!-- there are two form methods: "get" and "post" ; "get" shows the values for the type variables and values, "post" hides the type variables and values /-->

<form name="form1" action="activity-1-9.php" method="post">
	<h2>Test Form</h2>
	<!-- text input //-->
	First Name: <input type="text" name="fname" value="" placeholder="Your first name." style="background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAUBJREFUOBGVVE2ORUAQLvIS4gwzEysHkHgnkMiEc4zEJXCMNwtWTmDh3UGcYoaFhZUFCzFVnu4wIaiE+vvq6+6qTgthGH6O4/jA7x1OiCAIPwj7CoLgSXDxSjEVzAt9k01CBKdWfsFf/2WNuEwc2YqigKZpK9glAlVVwTTNbQJZlnlCkiTAZnF/mePB2biRdhwHdF2HJEmgaRrwPA+qqoI4jle5/8XkXzrCFoHg+/5ICdpm13UTho7Q9/0WnsfwiL/ouHwHrJgQR8WEwVG+oXpMPaDAkdzvd7AsC8qyhCiKJjiRnCKwbRsMw9hcQ5zv9maSBeu6hjRNYRgGFuKaCNwjkjzPoSiK1d1gDDecQobOBwswzabD/D3Np7AHOIrvNpHmPI+Kc2RZBm3bcp8wuwSIot7QQ0PznoR6wYSK0Xb/AGVLcWwc7Ng3AAAAAElFTkSuQmCC"); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"></input>
	<hr size="1" />
	
	<!-- password input //-->
	Password: <input type="password" name="pwd" value=""></input>
	<hr size="1" />
	
	<!-- radio input //-->
	<input type="radio" name="sex" value="male" checked> Male</input><br />
	<input type="radio" name="sex" value="female"> Female</input>
	<hr size="1" />
	
	<!-- checkbox input //-->
	<input type="checkbox" name="fruit1" value="Pear"> I have a pear</input><br />
	<input type="checkbox" name="fruit2" value="Apple"> I have an apple</input>
	<hr size="1" />
	
	<!-- simple drop-down list //-->
	<select name="car">
		<option value="">- Choose a Car -</option>
		<option value="Volvo">Volvo</option>
		<option value="Echo">Echo</option>
		<option value="Ferrari">Ferrari</option>
		<option value="Audi">Audi R8</option>
		<option value="Ford">Ford Truck</option>
	</select>
	<hr size="1" />
	
	<!-- textarea input //-->
	<textarea name="info" rows="5" cols="50"></textarea>
	<hr size="1" />
	
	<!-- hidden input -->
	<input type="hidden" name="hideme" value="42"></input>
	
	<!-- submit button //-->
	<input type="submit" name="subButton" value="SUBMIT" style="font-family:Comic Sans MS, sans-serif;"></input><br>
	<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
</form>
</body>
</html>
