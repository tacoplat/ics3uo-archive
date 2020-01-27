<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Activity 2.3 - Conditional Statements in PHP I</title>
	<meta name="author" content="Andy Zhen">
	<meta name="description" content="Practice with PHP Conditional Statements">
	<link href="https://fonts.googleapis.com/css?family=Cantarell&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="https://images.emojiterra.com/twitter/v12/512px/1f98e.png">
	<style>
		html {
			background: url(https://media.boingboing.net/wp-content/uploads/2018/05/cool-background1.png) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}

		body {
			color: #000500;
			font-family: 'Cantarell', sans-serif;
			font-size: 0.9em;
		}
		#content {
			text-align: center;
			padding: 60px 0;
			margin: auto;
			width: 70%;
			background-color: rgba(231, 219, 181, 0.7);
			border-radius: 0.5em;
		}
		.backarrow {
			float:left;
			display: inline-block;
		}
		select, option {
			background-color: #D13EAE;
			border: 2px solid #E0DDDD;
			font-size: 20px;
			font-family: 'Cantarell', sans-serif;
			margin-bottom: 20px;
			margin-top: 15px;
			width: 20%;
			color: #241E32;
		}
		.button {
			background-color: #635189;
			border: 2px solid #E0DDDD;
			font-size: 20px;
			font-family: 'Cantarell', sans-serif;
			border-radius: 0.6em;
			margin-top: 10px;
			padding: 5px;
		}
		.button:hover {
			background-color: #241E32;
			border: 2px solid #E0DDDD;
			font-size: 20px;
			font-family: 'Cantarell', sans-serif;
			border-radius: 0.6em;
			margin-top: 10px;
			padding: 5px;
		}
		.image {
			height: 180px;
			border-radius: 0.6em;
			background-color: white;
		}
		#criteria {
			display: none;
			width: 500px;
			margin: auto;
		}
		table, tr, td {
			border: 1px solid black;
			background-color: white;
		}
	</style>
</head>
<body>
	<a href="https://icsprogramming.ca/2019-2020/zhen4d333/" class="backarrow"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
	<div id="content">
		<h1><b>Rock, Paper, Scissors, Lizard, Spock</b></h1>
		<h3>Activity 2.3b - Conditional Statements in PHP w/ Multiple Variables</h3>
		<hr size="2">
		<div id="criteria">
			<table>
				<tr>
					<td><b>Condition</b></td>
					<td><b>Output</b></td>
				</tr>
				<tr>
					<td>number is less than or equal to 5 and colour is red</td>
					<td>Lizard</td>
				</tr>
				<tr>
					<td>number is greater than 5 and colour is red or blue</td>
					<td>Spock</td>
				</tr>
				<tr>
					<td>number is greater than or equal to 3 and less than 7 and colour is green</td>
					<td>Rock</td>
				</tr>
				<tr>
					<td>number is greater than or equal to 9 and colour is green</td>
					<td>Paper</td>
				</tr>
				<tr>
					<td>number is equal to 1  and colour is blue</td>
					<td>Scissors</td>
				</tr>
				<tr>
					<td><i>Any other (default else statement) input combination...</i></td>
					<td>Nothing specific to output... sorry try again.</td>
				</tr>
			</table>
		</div>
		<form action="activity-2-3b.php" name="rpsls" method="post">
			<select name="number">
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
			</select>
			<select name="colour">
				<option>Red</option>
				<option>Blue</option>
				<option>Green</option>
			</select><br>
			<input type="submit" name="submitBtn" value="Submit" class="button">
			<button type="button" name="viewCriteria" class="button" id="criteriaBtnOpen" onclick="openForm()">Show Criteria</button>
			<button type="button" class="button" onclick="location.href= 'https://icsprogramming.ca/2019-2020/zhen4d333/activity-2-3b.php';">Reset</button>
		</form>
		<?php
			$number = $_POST['number'];
			$colour = $_POST['colour'];

			if ($_POST['submitBtn'] AND $number <= 5 AND $colour == "Red") {
					echo "<p>Lizard</p><br><img src='https://graphicriver.img.customer.envatousercontent.com/files/263859556/preview.jpg?auto=compress%2Cformat&q=80&fit=crop&crop=top&max-h=8000&max-w=590&s=b21e42ca0f4c6edb133e72fc41015455' class='image'>";
			} elseif ($_POST['submitBtn'] AND $number > 5 AND ($colour == "Red" OR $colour == "Blue")) {
				echo "<p>Spock</p><br><img src='https://www.animationmagazine.net/wordpress/wp-content/uploads/spock-post.jpg' class='image'>";
			} elseif ($_POST['submitBtn'] AND $number >= 3 AND $number < 7 AND $colour == "Green") {
				echo "<p>Rock</p><br><img src='https://cdn0.iconfinder.com/data/icons/rock-paper-scissors-emoji/792/rock-paper-scissors-emoji-cartoon-026-512.png' class='image'>";
			} elseif ($_POST['submitBtn'] AND $number >= 9 AND $colour == "Green") {
				echo "<p>Paper</p><br><img src='https://cdn0.iconfinder.com/data/icons/rock-paper-scissors-emoji/792/rock-paper-scissors-emoji-cartoon-019-512.png' class='image'>";
			} elseif ($_POST['submitBtn'] AND $number == 1 AND $colour == "Blue") {
				echo "<p>Scissors</p><br><img src='https://previews.123rf.com/images/korobula/korobula1801/korobula180100023/93413035-cartoon-scissors-vector-illustration.jpg' class='image'>";
			} elseif ($_POST['submitBtn']) {
				echo "<p>Nothing specific to output... sorry try again.</p><br><img src='https://st2.depositphotos.com/1742172/9688/v/950/depositphotos_96880008-stock-illustration-textured-cartoon-question-mark.jpg' class='image'>";
			}
		?>
		<script type="text/javascript">
			function openForm() {
		  document.getElementById("criteria").style.display = "block";
		  var open = document.getElementById("criteriaBtnOpen");
		  open.setAttribute("id", "criteriaBtnClose");
		  open.setAttribute("name", "hideCriteria");
		  open.setAttribute("onclick", "closeForm()");
		  open.textContent = "Hide Criteria";
		}
			function closeForm() {
		  document.getElementById("criteria").style.display = "none";
		  var close = document.getElementById("criteriaBtnClose");
		  close.setAttribute("id", "criteriaBtnOpen");
		  close.setAttribute("onclick", "openForm()");
		  close.setAttribute("name", "viewCriteria");
		  close.textContent = "Show Criteria";
		}
		</script>
	</div>
</body>