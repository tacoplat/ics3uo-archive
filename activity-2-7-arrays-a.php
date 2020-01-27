<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Activity 2.7a - Train Arrays</title>
		<meta charset="utf-8">
		<meta name="Author" content="Andy Zhen">
		<meta name="Description" content="Basic numeric arrays with train cars.">
		<link href="https://www.emoji.co.uk/files/mozilla-emojis/travel-places-mozilla/11760-steam-locomotive.png" rel="shortcut icon">
		<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
		<style type="text/css">
			html {
				background-color: #91972A;
				padding: 20px;
				font-family: 'Nunito', sans-serif;
				color: #707464;
			}
			.content {
				background-color: #B6C454;
				padding: 20px;
			}
			.button {
				background-color: #858F3E;
				color: #E6D3A3;
				font-size: 18px;
				padding: 8px;
				font-family: 'Nunito', sans-serif;
				border-radius: 0.7em;
				margin-top: 10px;
				margin-bottom: 10px;
				margin-right: 10px;
			}
			.button:hover {
				background-color: #747D36;
				color: #E6D3A3;
				font-size: 18px;
				padding: 8px;
				font-family: 'Nunito', sans-serif;
				border-radius: 0.7em;
				margin-top: 10px;
				margin-bottom: 10px;
				margin-right: 10px;
			}
			select {
				color: #858F3E;
				border: 2px solid #707464;
				width: 140px;
				font-size: 16px;
				margin-left: 5px;
				font-family: 'Nunito', sans-serif;
			}
			h1 {
				margin-bottom: 0px;
			}
			img {
				width: 260px;
				height: 280px;
				border: 2px solid #707464;
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
			<h1>Basics of Arrays</h1>
			<h3>2.7a - Train Car Arrays</h3>
			<img src="/2019-2020/zhen4d333/images/traincar.png" alt="train car diagram">
			<p>Use the form to display the contents of one of these train cars!</p>
			<?php
				$trainCar = array("Crude Oil", "Lumber Products", "Wheat Grains", "Unpasteurized Milk", "Cast Iron", "Milled Paper", "Office Supplies", "Elastic Bands");
			?>
			<form action="activity-2-7-arrays-a.php" name="traincarinput" method="post">
				<label for="caroption">Display contents of which train car? </label>
				<select name="caroption">
					<option <?php if(isset($_POST['caroption']) && $_POST['caroption'] == 'Show All') {echo ' selected="selected"';} ?>>Show All</option>
					<option <?php if(isset($_POST['caroption']) && $_POST['caroption'] == '0') {echo ' selected="selected"';} ?>>0</option>
					<option <?php if(isset($_POST['caroption']) && $_POST['caroption'] == '1') {echo ' selected="selected"';} ?>>1</option>
					<option <?php if(isset($_POST['caroption']) && $_POST['caroption'] == '2') {echo ' selected="selected"';} ?>>2</option>
					<option <?php if(isset($_POST['caroption']) && $_POST['caroption'] == '3') {echo ' selected="selected"';} ?>>3</option>
					<option <?php if(isset($_POST['caroption']) && $_POST['caroption'] == '4') {echo ' selected="selected"';} ?>>4</option>
					<option <?php if(isset($_POST['caroption']) && $_POST['caroption'] == '5') {echo ' selected="selected"';} ?>>5</option>
					<option <?php if(isset($_POST['caroption']) && $_POST['caroption'] == '6') {echo ' selected="selected"';} ?>>6</option>
					<option <?php if(isset($_POST['caroption']) && $_POST['caroption'] == '7') {echo ' selected="selected"';} ?>>7</option>
					<option <?php if(isset($_POST['caroption']) && $_POST['caroption'] == 'Random Car') {echo ' selected="selected"';} ?>>Random Car</option>
				</select><br>
				<input type="submit" name="subBtn" value="Submit" class="button">
				<input type="submit" name="reset" value="Reset" class="button">
			</form>
			<?php
				$caroption = $_POST['caroption'];
				$r = rand(0, 7);

				$picture = array("<td><img src='https://previews.123rf.com/images/crstrbrt/crstrbrt1307/crstrbrt130700001/20687277-crude-oil-barrel.jpg' alt='crude oil picture'></td>", "<td><img src='http://www.taigabuilding.com/sites/default/files/styles/featured_image_mobile/public/lumber-featured-mobile.jpg.png?itok=C4wQrL7t' alt='lumber picture'></td>", "<td><img src='https://wholegrainscouncil.org/sites/default/files/styles/teaser/public/thumbnails/image/GrainStrip1400.jpg?itok=nPvRCOm9' alt='grains picture'></td>", "<td><img src='https://nourishingourchildren.files.wordpress.com/2012/03/abbey-farm-tour-221.jpg?w=651&h=434' alt='milk picture'></td>", "<td><img src='http://loftismetals.com/wp-content/uploads/2018/07/Cast-Iron.jpg' alt='cast iron rods'></td>", "<td><img src='https://cdn11.bigcommerce.com/s-xa92dr7qw8/images/stencil/1280x1280/products/1864/3751/a4-blush-pinks-paper-pack__73451.1550679698.jpg?c=2&imbypass=on' alt='paper picture'></td>", "<td><img src='http://www.officexpress.co.uk/wp-content/uploads/2013/10/large-office-supplies-stationery.jpg' alt='office supplies'></td>", "<td><img src='https://www.opchealth.com.au/content/images/thumbs/0007569_latex-free-rubber-bands_400.jpeg' alt='rubber bands'></td>");
				
				if($_POST['subBtn']){
					echo "<hr>";
					echo "<table cellpadding='5'>";
					if($caroption == "Show All"){
						echo "<tr><td></td><td><img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUehBDBmkRgaTwpdJVOgx9Jx5klBRsQ8fMiVjOdBtoq_6b986m&s' alt='locomotive'></td>";
						for ($i=0; $i < sizeof($trainCar); $i++) { 
							echo "<tr><td>" . $trainCar[$i] . " [$i]</td>";
							echo $picture[$i];
							echo "</tr>";
						}
					} elseif($caroption == "Random Car"){
						echo "<tr><td>" . $trainCar[$r] . " [$r]</td>";
						echo $picture[$r] . "</tr>";
					} else {
						echo "<tr><td>" . $trainCar[$caroption] . " [$caroption]";
						echo $picture[$caroption] . "</tr>";
					}
					echo "</table>";
				}

				if($_POST['reset']){
					echo("<meta http-equiv='refresh' content='0'>");
				}
			?>
		</body>
	</div>
</html>