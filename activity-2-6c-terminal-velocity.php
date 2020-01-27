<?
$mass = $_POST['mass'];
$area = $_POST['area'];
switch ($_POST['objshape']) {
	case $_POST['objshape'] == "Flat Plate":
		$Cd = 1.28;
		break;
	case $_POST['objshape'] == "Prism":
		$Cd = 1.14;
		break;
	case $_POST['objshape'] == "Bullet":
		$Cd = 0.3;
		break;
	case $_POST['objshape'] == "Sphere":
		$Cd = 0.1;
		break;
	case $_POST['objshape'] == "Airfoil":
		$Cd = 0.05;
		break;
	default:
		$Cd = "";
		break;
	}
function terminalVelocity($mass,$Cd,$area){
	global $velocity;
	$velocity = number_format(sqrt((19.6*$mass)/($Cd*1.229*$area)), 2);
}
if(empty($mass) or empty($area) or empty($Cd)) {
	$velocity = "V";
	$mass = "m";
	$Cd = "Cd";
	$area = "A";
}
if($_POST['subBtn']){
	if (is_numeric($mass) and is_numeric($area) and $mass > 0 and $area > 0){
		terminalVelocity($mass,$Cd,$area);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Andy Zhen">
		<meta name="description" content="Combining User Input with Functions, Terminal Velocity Calculator">
		<title>Activity 2.6c - Terminal Velocity</title>
		<link href="https://images.emojiterra.com/google/android-pie/512px/1f686.png" rel="shortcut icon">
		<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
		<style type="text/css">
			html {
				background-color: #F45B69;
				padding: 20px;
				font-family: 'Nunito', sans-serif;
			}
			.content {
				background-color: #EBEBEB;
				padding: 20px;
				border: 2px solid #52489C;
			}
			fieldset {
				width: 40%;
			}
			.error {
				color: red;
			}
			.inputs {
				margin-top: 10px;
				margin-bottom: 10px;
				width: 150px;
				border: 2px solid #52489C;
				font-size: 14px;
			}
			.button {
				background-color: #59C3C3;
				color: white;
				font-size: 16px;
				padding: 8px;
				font-family: 'Nunito', sans-serif;
				border-radius: 1em;
				margin-right: 10px;
				margin-top: 10px;
			}
			.button:hover {
				background-color: #4062BB;
				color: white;
				font-size: 16px;
				padding: 8px;
				font-family: 'Nunito', sans-serif;
				border-radius: 1em;
				margin-right: 10px;
				margin-top: 10px;
			}
			.measurements {
				color: orange;
			}
			.formula {
				margin-top: 10px;
				margin-bottom: 10px;
			}
		</style>
	</head>
	<body>
		<div class="content">
			<h1>Combining User Input with Functions</h1>
			<h3>2.6c - Terminal Velocity</h3>
			<i>The terminal velocity of an object is the maximum speed at which an object will fall through a fluid at. <br>Objects initially accelerate when falling in a fluid, as the object accelerates the upward resistive force of<br> the fluid eventually equals the downward force of gravity causing the object to stop accelerating and to<br> reach its terminal (maximum) speed.</i><br>
			<img class="formula" src="https://latex.codecogs.com/gif.latex?<?echo $velocity;?>&space;=&space;\sqrt{\frac{19.6&space;\times&space;<?echo $mass;?>}{<?echo $Cd;?>&space;\times&space;1.229&space;\times&space;<?echo $area;?>}}"/><br>
			<i>In the formula given above,<br>V represents the terminal velocity.<br>m represents the object mass.<br>Cd represents the drag coefficient (which changes based on the frontal shape).<br>A represents the frontal area.</i><br>
			<?php
			if ($_POST['reset']) {
					$mass == "";
					$area == "";
					$Cd == "";
				}
			?>
			<form name="tvcalc" action="activity-2-6c-terminal-velocity.php" method="post">
				<label for="mass">Object Mass (kg): </label>
				<input type="text" name="mass" class="inputs" value=<?if($_POST['subBtn']){echo $mass;}?>><br>
				<label for="objshape">Object Shape: </label>
				<select name="objshape" class="inputs">
					<option>Flat Plate</option>
					<option>Prism</option>
					<option>Bullet</option>
					<option>Sphere</option>
					<option>Airfoil</option>
				</select><br>
				<label for="area">Frontal Area (m²): </label>
				<input type="text" name="area" class="inputs" value=<?if($_POST['subBtn']){echo $area;}?>><br>
				<input type="submit" name="subBtn" value="Calculate Terminal Velocity" class="button">
				<input type="submit" name="reset" value="Reset" class="button">
			</form>
			<?php
				if($_POST['subBtn']){
					if (is_numeric($mass) and is_numeric($area) and $mass > 0 and $area > 0){
						echo "<p>For a <span class='measurements'>" . $_POST['objshape'] . "-shaped</span> object with a mass of <span class='measurements'>" . $mass . "kg</span> and a frontal area of <span class='measurements'>" . $area . "m²</span>, <br>";
						echo "The terminal velocity of your object is <span class='measurements'>" . $velocity . "m/s</span>.</p>";
					} else {
						echo "<p><span class='error'>Please ensure you have set numerical values greater than 0 for the mass and the frontal area.</span></p>";
					}
				}
			?>
		</div>
		<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
	</body>
</html>