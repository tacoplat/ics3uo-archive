<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Activity 2.6d - BMI Calculator</title>
		<meta charset="utf-8">
		<meta name="author" content="Andy Zhen">
		<meta name="description" content="A Body-Mass Index calculator made using PHP functions.">
		<link href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/81/older-man_emoji-modifier-fitzpatrick-type-5_1f474-1f3fe_1f3fe.png" rel="shortcut icon">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
		<style type="text/css">
			html {
				background-color: #5296A5;
				color: #6A4B2E;
				padding: 20px;
				font-family: 'Nunito', sans-serif;
			}
			body {
				font-family: 'Nunito',sans-serif;
				background-color: #5296A5;
			}
			h1 {
				font-size: 2.1em;
				margin-top: 15px;
			}
			h3 {
				font-size: 1.1em;
				margin-top: 20px;
			}
			.content {
				background-color: #F6C28B;
				border: 2px solid #82DDF0;
				padding: 20px;
				margin: 10px;
			}
			input {
				margin-top: 10px;
				margin-bottom: 10px;
			}
			p.result {
				color: #453B30;
			}
			p.error {
				color: red;
			}
			.spacebelow {
				margin-bottom: 20px;
				display: inline-block;
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
			.fatguy {
				float: right;
				height: 450px;
				margin-right: 260px;
			}
			#explanation {
				width: 80%;
			}
			.imgresult {
				width: 400px;
				border-radius: 0.6em;
				border: 1px solid black;
			}
		</style>
	</head>
	<body>
		<div class="content">
			<h1>Combining User Input with Functions</h1>
			<h3>2.6d - BMI Calculator</h3>
			<p id="explanation"><i>Originally devised by Adolphe Quetelet, the BMI is a measurement that can be used to determine someone's weight class. BMI is calculated as a metric weight to height ratio, using kilograms and meters. The weight status category table can be used to predict the presence of serious health risks and diseases in an individual. Although the BMI is a good way to measure someone's health and body stats, it has limitations that could affect people like bodybuilders, elderly people, children and pregnant women.</i></p>
			<img class="spacebelow" src="https://latex.codecogs.com/gif.latex?BMI&space;=&space;\frac{weight&space;(kg)}{height&space;(m)^{2}}" title="BMI = \frac{weight (kg)}{height (m)^{2}}" /><br>
			<table class="spacebelow" border="1">
				<tr>
					<td colspan="2">BMI Weight Categories</td>
				</tr>
				<tr>
					<td>BMI</td>
					<td>Weight Status</td>
				</tr>
				<tr>
					<td>< 18.5</td>
					<td>Underweight</td>
				</tr>
				<tr>
					<td>18.5 - 24.9</td>
					<td>Normal</td>
				</tr>
				<tr>
					<td>25 - 29.9</td>
					<td>Overweight</td>
				</tr>
				<tr>
					<td>> 30.0</td>
					<td>Obese</td>
				</tr>
			</table>
			<img src="https://www.pngkey.com/png/full/64-648880_fat-man-running-fat-person-running-png.png" class="fatguy">
			<?php
				function imperialBmiCalc($weight,$height){
					global $bmi;
					if($height > 0 and $weight > 0){
						$bmi = number_format(($weight*703)/pow($height, 2), 1);
						echo "<p class='result'>Your BMI is " . $bmi . ".</p>";
					} else {
						echo "<p class='error'>Your height or weight cannot be zero (or less)!</p>";
					}
				}
				function metricBmiCalc($weight,$height){
					global $bmi;
					if($height > 0 and $weight > 0) {
						$bmi = number_format($weight/pow($height, 2), 1);
						echo "<p class='result'>Your BMI is " . $bmi . ".</p>";
					} else {
						echo "<p class='error'>Your height or weight cannot be zero (or less)!</p>";
					}
				}
				function weightCategory($bmi){
					global $bmi;
					if ($bmi > 0 and $bmi < 18.5) {
							echo "<p class='result'>According to your BMI, you are classified as <u>underweight</u>.</p>";
							echo "<p class='result'>Since you are underweight, it may be beneficial to visit a physician.<br>Similarly to being on the obese side of the spectrum, being underweight can also result in health risks.</p>";
							echo "<img class='imgresult' src='https://image.shutterstock.com/image-photo/sticks-twigs-isolated-on-white-260nw-492536758.jpg'>";
						} elseif ($bmi >= 18.5 and $bmi < 25) {
							echo "<p class='result'>According to your BMI, you are classified as <u>normal</u>.</p>"
							;
							echo "<img class='imgresult' src='https://image.shutterstock.com/image-photo/smiling-young-man-beard-brown-260nw-233628343.jpg'>";
						} elseif ($bmi >= 25 and $bmi < 30) {
							echo "<p class='result'>According to your BMI, you are classified as <u>overweight</u>.</p>";
							echo "<img class='imgresult' src='https://image.shutterstock.com/image-photo/handsome-overweight-guy-red-tshirt-260nw-1347169568.jpg'>";
						} elseif ($bmi >= 30) {
							echo "<p class='result'>According to your BMI, you are classified as <u>obese</u>.</p>";
							echo "<p class='result'>In accordance with the index, it is recommended that you visit a physician for more information on obesity.<br>If left untreated, obesity can result in severe health risks.</p>";
							echo "<img class='imgresult' src='https://friendlystock.com/wp-content/uploads/2018/03/2-fat-guy-eating-cake-cartoon-clipart.jpg'>";
						} else {
							echo "<p class='error'>There was an error in determining your weight category.</p>";
						}
				}
			?>
			<form name="bmicalc" action="activity-2-6d-bmi.php" method="post">
				<input type="checkbox" class="spacebelow" id="toggle-event" name="toggle-event" data-toggle="toggle" data-onstyle="success" data-offstyle="info" data-on="Imperial Units (lbs/in)" data-off="Metric Units (kg/m)" data-width="200" data-height="35" value="1" <?if(isset($_POST['toggle-event'])){echo "checked";}?>><br>
				<script>
				  $(function weightListener() {
				    $('#toggle-event').change(function weightListener() {
				    	if ($(this).prop('checked')) {
				    		 $('#weight-event').html('Your Weight (lbs): ')
				    	} else {
				    		$('#weight-event').html('Your Weight (kg): ')
				    	}
				    })
				  })
				</script>
				<label id="weight-event" for="weight"><?if(isset($_POST['toggle-event'])){echo "Your Weight (lbs): ";}else{echo "Your Weight (kg): ";}?> </label>
				<input type="text" name="weight" value=<?if($_POST['subBtn']){echo $_POST['weight'];}?>><br>
				<script>
				  $(function heightListener() {
				    $('#toggle-event').change(function heightListener() {
				    	if ($(this).prop('checked')) {
				    		 $('#height-event').html('Your Height (in): ')
				    	} else {
				    		$('#height-event').html('Your Height (m): ')
				    	}
				    })
				  })
				</script>
				<label id="height-event" for="height"><?if(isset($_POST['toggle-event'])){echo "Your Height (in): ";}else{echo "Your Height (m): ";}?></label>
				<input type="text" name="height" value=<?if($_POST['subBtn']){echo $_POST['height'];}?>><br>
				<input type="submit" class="button" name="subBtn" value="Calculate BMI">
				<input type="submit" class="button" name="reset" value="Reset">
				<?php
					$height = $_POST['height'];
					$weight = $_POST['weight'];

					if($_POST['subBtn']) {
						if(is_numeric($height) and is_numeric($weight)) {
							if(isset($_POST['toggle-event'])) {
								imperialBmiCalc($weight, $height);
							} else {
								metricBmiCalc($weight, $height);
							}
							weightCategory($bmi);
						} else {
							echo "<p class='error'>Please enter numerical values for your height and weight.</p>";
						}
					}
				?>
			</form>
		</div>
		<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
	</body>
</html>