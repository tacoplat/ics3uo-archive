<!DOCTYPE html>
<html lang="en">
<head>
	<title>Baking a Pie (Activity 1.9b)</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link href="https://fonts.googleapis.com/css?family=Chilanka&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/emojipedia/132/pie_1f967.png">
	<style type="text/css">
		body {
			padding: 25px;
			margin: 0;
			font-family: 'Chilanka', cursive;
			font-size: 1.1em;
			width: 100%;
			background-size: cover;
			background: url("https://cdn.pixabay.com/photo/2016/11/29/10/09/bakery-1868925_960_720.jpg");
			text-align: center;
		}
		form {
		  	position: relative;
		  	padding: 1.0em;
		  	margin-left: auto;
		  	margin-right: auto;
		  	width: 50%;
		  	background: #FFEFEC;
		  	text-align: left;
		    border-radius: 0.5em;
		    font-family: 'Chilanka', cursive;
		    color: #D1A209;
		}
		h1 {
		  text-align: center;
		}
		p {
			font-family: 'Chilanka', cursive;
			color: #D1A209;
		}
		#cruststylesingle {
		  width: 45%;
		  padding: 10px;
		  text-align: left;
		  display: none;
		}
		#cruststyledouble {
		  width: 45%;
		  padding: 10px;
		  text-align: left;
		  display: none;
		}
		.section {
		  width: 50%;
		  padding: 0.8em;
		  margin-top: 16px;
		  text-align: left;
		}
		.checkboxes {
		  width: 50%;
		  margin-top: 20px;
		  left: 20px;
		  text-align: left;
		}
		#hidden {
			position: relative;
		  	padding: 1.0em;
		  	margin-left: auto;
		  	margin-right: auto;
		  	margin-bottom: 20px;
		  	width: 50%;
		  	background: #FFEFEC;
		  	text-align: left;
		    border-radius: 0.5em;
		    font-family: 'Chilanka', cursive;
		    color: #D1A209;
		}
	</style>
</head>
<body>
		<?php
		if (isset($_POST['subButton'])) {

			$name = $_POST['name'];
		    $pin = $_POST['pin'];
		    $crust = $_POST['cruststyle'];
		    $filling = $_POST['filling'];
		    $fat = $_POST['fat'];
		    $temp = $_POST['temp'];
		    $time = $_POST['time'];
		    $desc = $_POST['description'];

		    echo "<div id='hidden'><hr size='2'/><h2>Your Pie:</h2><hr size='2'/>";
			echo "<p>Hello, <b>" . $name . "</b>.</p>";
		    echo "<p>Your PIN is <b>"  . $pin . "</b>.</p>";
		    echo "<p>Your <b>". $filling . "</b> pie has a <b>". $crust ." " . $fat . "</b> crust.</p>";
		    echo "<p>The oven was set to <b>" . $temp . "°C</b> for <b>" . $time . "</b> minutes.</p>";
		    echo "<p>Here is your description of the pie: " . $desc . ".</p><hr size='2'/></div>";
		}
		?>
	<form name="bakery" action="activity-1-9b.php" method="post">
		<hr size="2"/>
		<h1>Baking a Pie</h1>
		<hr size="2"/>
		<div class="section">
			Name:* <input type="text" name="name" value="" placeholder="Your name." required></input><br>
		</div>
		<div class="section">
			Single or double crust?<br>
			<button onclick="showsingle()" type="button">Single-crusted</button>
			<button onclick="showdouble()" type="button">Double-crusted</button><br>
			<div id="cruststylesingle">
			  <input type="radio" name="cruststyle" value="single plain">Plain</input><br>
			  <input type="radio" name="cruststyle" value="tart">Tart</input>
			</div>
			<div id="cruststyledouble">
			  <input type="radio" name="cruststyle" value="double plain">Plain</input><br>
			  <input type="radio" name="cruststyle" value="lattice">Lattice</input><br>
			  <input type="radio" name="cruststyle" value="slit">Slit Vent</input><br>
			  <input type="radio" name="cruststyle" value="punch">Punch Vent</input>
			</div>
		</div>
		<div class="section">
			Filling:*
			<select name="filling" required>
				<option value="-">Choose a filling</option>
				<option value="apple">Apple</option>
				<option value="strawberry rhubarb">Strawberry & Rhubarb</option>
				<option value="blueberry">Blueberry</option>
				<option value="pumpkin">Pumpkin</option>
				<option value="cherry">Cherry</option>
				<option value="peach">Peach</option>
				<option value="banana cream">Banana & Cream</option>
				<option value="mincemeat">Mincemeat</option>
				<option value="custard">Custard</option>
				<option value="lime">Key Lime</option>
			</select>
		</div>
		<div class="section">
			Crust fat:*
			<select name="fat" required>
				<option value="-">Choose a fat</option>
				<option value="butter">Butter</option>
				<option value="lard">Lard</option>
				<option value="shortening">Shortening</option>
				<option value="coconutoil">Coconut Oil</option>
			</select>
		</div>
		<div class="section">
			Oven temperature:* <input type="number" name="temp" value="" placeholder="Temperature (°C)" required></input><br>
		</div>
		<div class="section">
			Baking time:* <input type="number" name="time" value="" placeholder="Time (min)" required></input>
		</div>
		<div class="section">
			Toppings:<br>
			<input type="checkbox" name="topping1" value="icingsugar">Icing Sugar</input><br>
			<input type="checkbox" name="topping2" value="crumble">Crumble</input><br>
			<input type="checkbox" name="topping3" value="cardrizzle">Caramel Drizzle</input><br>
			<input type="checkbox" name="topping4" value="chocdrizzle">Chocolate Drizzle</input><br>
			<input type="checkbox" name="topping5" value="icecream">Ice Cream</input><br>
			<input type="checkbox" name="topping6" value="whippedcream">Whipped Cream</input><br>
		</div>
		<div class="section">
			PIN:* <input type="password" name="pin" value="" maxlength="6" placeholder="Create a 6-character PIN" required></input>
		</div>
		<div class="section">
			<textarea name="description" rows="4" cols="50" placeholder="Describe your creation."></textarea>
		</div>
		<div class="section">
			<input type="submit" name="subButton" value="Submit"></input>
		</div>
		<hr size="2"/>
		<div class="section"><a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
		</div>
		<hr size="2"/>
	</form>
	<script>
		function showsingle() {
		  var x = document.getElementById("cruststylesingle");
		  var y = document.getElementById("cruststyledouble");
		  if (x.style.display == "none") {
		    x.style.display = "block";
		    y.style.display = "none";
		  } else {
		    x.style.display = "block";
		    y.style.display = "none";
		  }
		}
		function showdouble() {
		  var x = document.getElementById("cruststylesingle");
		  var y = document.getElementById("cruststyledouble");
		  if (y.style.display == "none") {
		    y.style.display = "block";
		    x.style.display = "none";
		  } else {
		    y.style.display = "block";
		    x.style.display = "none";
		  }
		}
	</script>
	<noscript>Javascript is not enabled in your browser!</noscript>
</body>