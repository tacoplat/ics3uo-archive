<!DOCTYPE html>
<html>
	<head>
		<title>Example 2.6a - PHP Functions</title>
		<link rel="shortcut icon" href="https://data.photofunky.net/output/image/9/0/6/0/90608b/photofunky.gif">
		<style>
			html {
				background-color: lime;
				padding: 20px;
				font-family: "Comic Sans MS", sans-serif;
			}
			p {
				background-color: white;
				border: 1px solid black;
				border-radius: 0.6em;
				padding: 20px;
			}
		</style>
	</head>
	<body>
		<h2>Practice with creating PHP Functions</h2>
		<?php
		function displayText() {
		     echo "This is my first function!<br />";
		}
		function displayCourse($course) {
		     echo "I am taking " . $course . "<br />";
		}
		function calVolumeCylinder($radius,$height) {
		     //calculate the volume of a cylinder
		     $volume = 2*(3.14)*$radius*$height;
		     return $volume;
		}
		function calculateTotalPrice($product,$quantity,$unitprice,$storename) {
			$subtotal = $quantity * $unitprice;
			$salestax = $subtotal * 0.13;
			$totalprice = $subtotal + $salestax;
			echo "<p><u>" . $quantity . "</u> <u>" . $product . "(s)</u> would cost you <u>$" . number_format($totalprice, 2) . "</u> at <u>" . $storename . "</u>.";
			echo "<br>The subtotal before sales tax is added is $" . $subtotal . ".";
			echo "<br>You would pay $" . number_format($salestax, 2) . " in tax.</p>";
		}

		displayText();
		displayCourse("Computers");
		displayCourse("Science");
		echo "Volume of cylinder (r=4, h=20): " . calVolumeCylinder(4,20) . "<br>"; 
		calculateTotalPrice("Big Mac", 3, 5.99, "Millcroft S.C. McDonald's");
		calculateTotalPrice("Tomato & Mozzarella with Crispy Chicken", 2, 7.39, "Appleview Plaza McDonald's");
		calculateTotalPrice("Cajun Signature McWrap with Crispy Chicken", 7, 6.29, "486 Dundas Street McDonald's");
		?>
		<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
	</body>
</html>
