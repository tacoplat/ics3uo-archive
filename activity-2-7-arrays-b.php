<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Acceleration of Gravity</title>
		<meta charset="utf-8">
		<meta name="Author" content="Andy Zhen">
		<meta name="Description" content="Using associative arrays to classify planets.">
		<link href="https://www.internationalcenter.org/wp-content/uploads/2015/09/Emoji_u1f30f.svg_.png" rel="shortcut icon">
		<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
		<style type="text/css">
			html {
				background-color: #A23E48;
				padding: 20px;
				font-family: 'Nunito', sans-serif;
			}
			.content {
				background-color: #FF8C42;
				padding: 20px;
			}
			.error {
				color: red;
			}
			img {
				width: 100px;
				height: 100px;
			}
			.spacing {
				margin-top: 10px;
				margin-bottom: 10px;
			}
			.result {
				display: inline-block;
				margin-right: 100px;
				margin-bottom: 20px;
				width: 115px;
				text-align: center;
			}
			.button {
				background-color: #88A2AA;
				color: white;
				font-size: 18px;
				padding: 8px;
				font-family: 'Nunito', sans-serif;
				border-radius: 0.7em;
				margin-top: 10px;
				margin-bottom: 10px;
				margin-right: 10px;
			}
			.button:hover {
				background-color: #E2856E;
				color: white;
				font-size: 18px;
				padding: 8px;
				font-family: 'Nunito', sans-serif;
				border-radius: 0.7em;
				margin-top: 10px;
				margin-bottom: 10px;
				margin-right: 10px;
			}
			.backarrow {
				width: 80px !important;
				height: 80px !important;
				border: 0 !important;
				float: right;
			}
		</style>
	</head>
	<body>
		<div class="content">
			<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" class="backarrow" alt="Back to Index Page (this image is not displaying because of an error)."></a>
			<?php
				$acceleration = array("Mercury"=>"3.76", "Venus"=>"9.04", "Earth"=>"9.8", "Mars"=>"3.77", "Jupiter"=>"23.6", "Saturn"=>"10.06", "Uranus"=>"8.87", "Neptune"=>"11.23");
				$planetImage = array("Mercury"=>"https://upload.wikimedia.org/wikipedia/commons/thumb/d/d9/Mercury_in_color_-_Prockter07-edit1.jpg/1200px-Mercury_in_color_-_Prockter07-edit1.jpg", "Venus"=>"https://upload.wikimedia.org/wikipedia/commons/e/e5/Venus-real_color.jpg", "Earth"=>"https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/The_Earth_seen_from_Apollo_17.jpg/1200px-The_Earth_seen_from_Apollo_17.jpg", "Mars"=>"https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/OSIRIS_Mars_true_color.jpg/220px-OSIRIS_Mars_true_color.jpg", "Jupiter"=>"https://upload.wikimedia.org/wikipedia/commons/5/50/Jupiter%2C_image_taken_by_NASA%27s_Hubble_Space_Telescope%2C_June_2019_-_Edited.jpg", "Saturn"=>"https://space-facts.com/wp-content/uploads/saturn.png", "Uranus"=>"https://upload.wikimedia.org/wikipedia/commons/3/3d/Uranus2.jpg", "Neptune"=>"https://upload.wikimedia.org/wikipedia/commons/6/63/Neptune_-_Voyager_2_%2829347980845%29_flatten_crop.jpg");
			?>
			<h1>Acceleration of Gravity</h1>
			<p>Choose two values between 0 and 25, where the starting number must be less than or equal to the ending number, to set a range. The acceleration of gravity of various planets will be searched against the criteria set below.</p>
			<form name="gravityform" action="activity-2-7-arrays-b.php" method="post">
				<label for="starting">Starting value (m/s²): </label>
				<input type="text" name="starting" class="spacing" value=<?if($_POST['subBtn']){echo $_POST['starting'];}?>><br>
				<label for="ending">Ending value (m/s²): </label>
				<input type="text" name="ending" class="spacing" value=<?if($_POST['subBtn']){echo $_POST['ending'];}?>><br>
				<input type="submit" name="subBtn" class="spacing button" value="Search Planets">
				<input type="submit" name="reset" class="spacing button" value="Reset">
			</form>
			<?php
				$starting = $_POST['starting'];
				$ending = $_POST['ending'];

				if($_POST['subBtn']){
					if(is_numeric($starting) and is_numeric($ending)) {
						if($starting >= 0 and $ending <= 25) {
							if($starting <= $ending) {
								echo "<p>The following planets have accelerations of gravity between " . $starting . " and " . $ending . ":</p>";
								foreach ($acceleration as $key => $value) {
									if($value >= $starting and $value <= $ending){
										echo "<div class='result'><img src='" . $planetImage[$key] . "'><br>" . $key . "<br>";
										echo "Acceleration: " . $value . "</div>";
										$test = 1;
									}
								}
								if (!isset($test)) {
									echo "<p class='error'>There are no planets with accelerations between the specified values.</p>";
								}

							} else {
								echo "<p class='error'>Your starting value must be less than or equal to your ending value.</p>";
							}
						} else {
							echo "<p class='error'>Your starting value must be greater than or equal to 3, and your ending value must be less than or equal to 24.</p>";
						}
					} else {
						echo "<p class='error'>Please enter numerical values.</p>";
					}
				}
			?>
		</div>
	</body>
</html>