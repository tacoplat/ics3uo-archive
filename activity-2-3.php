<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Activity 2.3 - Conditional Statements in PHP I</title>
	<meta name="author" content="Andy Zhen">
	<meta name="description" content="Practice with PHP Conditional Statements">
	<link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="https://images.emojiterra.com/twitter/v12/512px/1f5d3.png">
	<style>
		body {
			background-color: #495867;
			font-family: 'Concert One', cursive;
			color: #E0DDDD;
			line-height: 2em;
		}
		h1 {
			color: #161B25;
		}
		select, input {
			margin-top: 15px;
			margin-bottom: 15px;
			border: 2px solid #577399;
			border-radius: 4px;
			font-family: 'Concert One', cursive;
		}
		.content {
			background-color: #DBCDC6;
			color: #273043;
			text-align: center;
			padding: 60px 0;
			margin: auto;
			width: 60%;
		}
		.backarrow {
			float:left;
			display: inline-block;
		}
		.button {
			background-color: #577399;
			border: 2px solid #161B25;
			font-size: 18px;
		}
		.button:hover {
			background-color: #303F54;
			border: 2px solid #161B25;
			font-size: 18px;
		}
		.image {
			width: 40%;
		}
	</style>
</head>
<body>
	<a href="https://icsprogramming.ca/2019-2020/zhen4d333/" class="backarrow"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
	<div class="content">
		<h1><u><b>Days of the Week</b></u></h1>
		<p>Get ready for some epic day-related memes!</p>
		<h3><i>Choose a Day of the Week!</i></h3>
		<form name="dayOfTheWeek" action="activity-2-3.php" method="post">
			<select name="day">
				<option>Please choose a day:</option>
				<option>Monday</option>
				<option>Tuesday</option>
				<option>Wednesday</option>
				<option>Thursday</option>
				<option>Friday</option>
				<option>Saturday</option>
				<option>Sunday</option>
			</select><br>
			<input type="submit" name="subBtn" value="Submit" class="button"><br>
			<hr size="2">
		</form>
		<?php
			$day = $_POST['day'];
			if ($_POST['subBtn'] && $day == "Monday") {
				echo "<p>Ugh, Mondays.</p><br><img src=\"https://s3.scoopwhoop.com/anj/photo/e5375b02-f366-4313-ae3a-e5d4e46b635e.jpg\" class=\"image\">";
			} elseif ($_POST['subBtn'] && $day == "Tuesday") {
				echo "<p>Well, at least it's better than Monday.</p><br><img src=\"https://i1.wp.com/bestlifeonline.com/wp-content/uploads/2019/07/Tuesday-Memes-10.jpg?resize=1024%2C766&ssl=1\" class=\"image\">";
			} elseif ($_POST['subBtn'] && $day == "Wednesday") {
				echo "<p>Ooh, it's 'hump day'!</p><br><img src=\"http://d207ibygpg2z1x.cloudfront.net/image/upload/v1541003827/articles_upload/content/lvd2hdc2gqdgdxo1x1bj.jpg\" class=\"image\">";
			} elseif ($_POST['subBtn'] && $day == "Thursday") {
				echo "<p>Why does Thursday exist? IMO it's kind of pointless.</p><br><img src=\"https://i2.wp.com/www.techjunkie.com/wp-content/uploads/2017/07/thursday-work-meme962831.jpg?w=690&ssl=1\" class=\"image\">";
			} elseif ($_POST['subBtn'] && $day == "Friday") {
				echo "<p>It's almost the weekend! Congratulations on making it this far!</p><br><img src=\"http://preetkamal.com/wp-content/uploads/2019/03/Friday-Meme-Friday-Is-My-Second.jpg\" class=\"image\">";
			} elseif ($_POST['subBtn'] && $day == "Saturday") {
				echo "<p>Relaxation day! Savour it while it lasts.</p><br><img src=\"https://i.pinimg.com/474x/20/9c/17/209c17b510891ca6cb627bb1f611b0a4.jpg\" class=\"image\">";
			} elseif ($_POST['subBtn'] && $day == "Sunday") {
				echo "<p>Uh oh, Monday's right around the corner...</p><br><img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9iNKh9MZAQTAvsbqJOC12MyEGeN1FTxeA599dABS1lxexjlSF6g\" class=\"image\">";
			} else {
				echo "Please select a day of the week using the dropdown above.";
			}
		?>
	</div>
</body>
</html>