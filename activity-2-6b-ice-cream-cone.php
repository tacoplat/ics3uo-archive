<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Activity 2.6b - Ice Cream Cone</title>
		<meta name="author" content="Andy Zhen">
		<meta name="description" content="Using user input & functions to calculate the volume of an ice cream cone.">
		<meta charset="utf-8">
		<link href="https://pngimage.net/wp-content/uploads/2018/06/ice-cream-emoji-png-9.png" rel="shortcut icon">
		<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
		<style type="text/css">
			html {
				background-color: #739E82;
				padding: 20px;
				font-family: 'Nunito', sans-serif;
			}
			.content {
				background-color: #F3FFB6;
				padding: 20px;
				border: 2px solid #D38B5D;
			}
			input {
				margin-bottom: 10px;
				margin-top: 20px;
			}
			h1 {
				margin-bottom: 0px;
			}
			img {
				margin-bottom: 10px;
			}
			p {
				background-color: white;
				padding: 10px;
				border: 1px solid black;
			}
			.button {
				background-color: #99621E;
				color: white;
				font-size: 18px;
				padding: 8px;
				font-family: 'Nunito', sans-serif;
				border-radius: 0.7em;
				margin-right: 10px;
			}
			.button:hover {
				background-color: #B48C5B;
				color: white;
				font-size: 18px;
				padding: 8px;
				font-family: 'Nunito', sans-serif;
				border-radius: 0.7em;
				margin-right: 10px;
			}
		</style>
	</head>
	<body>
		<?
		$coneheight = $_POST['coneheight'];
		$radius = $_POST['coneradius'];
		function iceCreamVolume($coneheight,$radius){
			global $conevolume;
			global $spherevolume;
			global $totalvolume;
			$conevolume = number_format(($coneheight * pi() * pow($radius, 2)) / 3, 2);
			$spherevolume = number_format(4 * (pi() * pow($radius, 3)) / 3, 2);
			$totalvolume = number_format($conevolume + $spherevolume, 2);
		}
		if(empty($coneheight) or empty($radius)) {
			$coneheight = "h";
			$radius = "r";
			$conevolume = "v_{cone}";
			$spherevolume = "v_{sphere}";
			$totalvolume = "v_{total}";
		}
		if ($_POST['reset']) {
			$coneheight == "";
			$radius == "";
		}
		if ($_POST['subBtn'] and is_numeric($coneheight) and is_numeric($radius) and $coneheight > 0 and $radius > 0) {
			iceCreamVolume($coneheight, $radius);
		}
		?>
		<div class="content">
			<h1>Combining User Input with Functions</h1>
			<h3>2.6b - Ice Cream Cone</h3>
			<i>This widget calculates the volume of an ice cream cone, when given the cone height and cone radius.<br>It assumes that the cone is only one scoop tall, and that the radius of the scoop is the same as that of the cone.<br>Obviously, this results in a close approximation rather than a definite cone volume.</i><br>
			<img src="/2019-2020/zhen4d333/images/conevolume.png"><br>
			<img src="https://latex.codecogs.com/gif.latex?\inline&space;<?echo $conevolume;?>&space;=&space;\frac{<?echo $coneheight;?>&space;\times&space;\pi&space;\times&space;<?echo $radius;?>^{2}}{3},&space;<?echo $spherevolume;?>&space;=&space;\frac{4&space;\times&space;\pi&space;\times&space;<?echo $radius;?>^{3}}{3}"/><br>
			<img src="https://latex.codecogs.com/gif.latex?\inline&space;<?echo $totalvolume;?>&space;=&space;<?echo $conevolume;?>&space;&plus;&space;<?echo $spherevolume;?>"/>
			<form action="activity-2-6b-ice-cream-cone.php" method="post" name="conevolume">
				<label for="coneheight">Cone Height (cm): </label>
				<input type="text" name="coneheight" value=<? if($_POST['subBtn']) {echo $coneheight;}?>><br>
				<label for="coneradius">Cone Radius (cm): </label>
				<input type="text" name="coneradius" value=<? if($_POST['subBtn']) {echo $radius;}?>><br>
				<input type="submit" name="subBtn" value="Calculate Cone Volume" class="button">
				<input type="submit" name="reset" value="Reset" class="button">
			</form>
			<?php
				if ($_POST['subBtn'] and is_numeric($coneheight) and is_numeric($radius) and $coneheight > 0 and $radius > 0) {
					echo "<p>The volume of an ice cream cone with a cone height of <span style='color:orange;'><u>" . $coneheight . " cm</u></span>, and cone radius of <span style='color:orange;'><u>" . $radius . " cm</u></span>, is approximately <span style='color:orange;'><u>" . $totalvolume . " cm³</u></span>.</p>";
				} elseif($_POST['subBtn'] and (!is_numeric($coneheight) or !is_numeric($radius))) {
					echo "<p><span style='color: red;'>Please ensure you have entered numerical values.</span></p>";
				} elseif($_POST['subBtn'] and ($coneheight <= 0 or $radius <= 0)) {
					echo "<p><span style='color: red;'>Please enter values greater than 0.</span></p>";
				}
			?>
		</div>
		<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
	</body>
</html>