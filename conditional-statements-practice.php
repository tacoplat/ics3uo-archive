<!DOCTYPE html>
<html lang="en">
<head>
	<title>Conditional Statements Practice</title>
	<meta name="author" content="Andy Zhen">
	<meta name="description" content="Practice with PHP Conditonal Statements">
	<link rel="shortcut icon" href="https://images.emojiterra.com/google/android-pie/512px/1f44d.png">
</head>
<body>	
	<?php
	// conditional statements (IF Statements)
	$num = $_GET['num1'];
	$num2 = $_GET['num2'];

	if ($num == "5") {
		echo "num1 (" . $num  . ") is equal to 5.";
	}

	// conditional statements (IF not equal to)
	if ($num != "5") {
		echo "num1 (" . $num  . ") is not equal to 5.";
	}
	echo "<hr size=\"1\">";

	// conditional statements (IF, ELSE IF, and ELSE)
	if ($num < "5") {
		echo "num1 (" . $num  . ") is less than 5.";
	}
	else if ($num > "5") {
		echo "num1 (" . $num  . ") is greater than 5.";
	}
	else {
		echo "num1 (" . $num  . ") is equal to 5.";
	}
	echo "<hr size=\"1\">";

	// conditional statements (comparing two variables)
	if ($num > $num2) {
		echo $num . " is greater than " . $num2;
	}
	else if ($num < $num2) {
		echo $num . " is less than " . $num2;
	}
	else {
		echo $num . " is equal to " . $num2;
	}
	echo "<hr size=\"1\">";

	// conditional statements (comparing two variables - OR and AND)
	if ($num == "5" OR $num2 == "20") {
		echo "num1 is FIVE <b>or</b> num 2 is TWENTY.";
	} else {
	            echo "num1 is not FIVE <b>or</b> num 2 is not TWENTY.";
	}

	echo "<hr size=\"1\">";
	if ($num == "5" AND ($num2 == "20" OR $num2 == "15") ) {
		echo "num1 is FIVE and num2 is TWENTY or FIFTEEN.";
	} else {
	            echo "num1 is not FIVE <b>and</b> num 2 is not TWENTY or FIFTEEN.";
	}
	?>
	<br><a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
</body>