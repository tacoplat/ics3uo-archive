<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Collatz Conjecture Application</title>
		<meta charset="utf-8">
		<meta name="Author" content="Andy Zhen">
		<meta name="Description" content="Using loops to display the collatz conjecture.">
		<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
		<link href="https://emojis.wiki/emoji-pics/apple/weary-cat-face-apple.png" rel="shortcut icon">
		<style type="text/css">
			html {
				background-color: #9FB8AD;
				padding: 20px;
				font-family: 'Nunito', sans-serif;
				color: #3F403F;
			}
			.content {
				background-color: #CED0CE;
				padding: 20px;
			}
			.spacing {
				margin-top: 10px;
				margin-bottom: 10px;
			}
			.error {
				color: red;
			}
			.odd {
				color: #5b9c1a;
			}
			.even {
				color: #2274b3;
			}
			.button {
				background-color: #475841;
				color: #CED0CE;
				font-size: 16px;
				padding: 6px;
				font-family: 'Nunito', sans-serif;
				border-radius: 0.8em;
				margin-right: 8px;
			}
			.button:hover {
				background-color: #798574;
				color: #3F403F;
				font-size: 16px;
				padding: 6px;
				font-family: 'Nunito', sans-serif;
				border-radius: 0.8em;
				margin-right: 8px;
			}
			.backarrow {
				width: 80px;
				height: 80px;
				float: right;
			}
			.results {
				width: 80%;
				text-align: justify;
			}
			.valuefield {
				border: 2px solid #798574;
				background-color: #ABB3A8;
				font-size: 18px;
				font-family: 'Nunito', sans-serif;
				margin-left: 4px;
			}
			#diagram {
				border: 2px solid #798574;
			}
		</style>
	</head>
	<body>
		<div class="content">
			<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" class="backarrow" alt="Back to Index Page (this image is not displaying because of an error)."></a>
			<h1>Collatz Conjecture</h1>
			<p>The <i>Collatz conjecture</i> is a mathematical conclusion that under the following criteria, always will result in the number 1.</p>
			<ul>
				<li>The initial value is a whole number greater than zero.</li>
				<li>If an odd number is chosen, multiply it by 3, and add 1.</li>
				<li>If an even number is chosen, divide it by 2.</li>
				<li>This process is repeated, until number 1 is reached; After one is reached, there is an infinite loop of 1-4-2-1.</li>
			</ul>
			<img src="/2019-2020/zhen4d333/images/collatz.png" id="diagram">
			<p>In this widget, odd numbers are represented by <span class="odd">green</span>, while even numbers are <span class="even">blue</span>.</p>
			<form name="collatzinput" action="collatz-conjecture-application.php" method="post">
				<label class="spacing" for="num">Choose an initial value: </label>
				<input type="text" class="spacing valuefield" name="num" value=<?if($_POST['subBtn']){echo $_POST['num'];}?>><br>
				<input type="submit" name="subBtn" class="spacing button" value="Submit">
				<input type="submit" name="reset" class="spacing button" value="Reset">
			</form>
			<?php
				$num = sprintf("%G", $_POST['num']);

				if($_POST['subBtn']){
					if (is_numeric($num) and $num > 0 and floor($num) == $num){
						echo "<p class='results'>";
						do {
							if ($num % 2 == 0) {
								echo "<span class='even'>" . $num . "</span>";
								$num = $num / 2;
							} else {
								echo "<span class='odd'>" . $num . "</span>";
								$num = $num * 3 + 1;
							}
							echo ", ";
						} while ($num > 1);
						echo "<span class='odd'>" . $num . "</span>.</p>";
					} else {
						echo "<p class='error'>Please enter a whole number greater than 0 as your initial value.</p>";
					}
				}
			?>
		</div>
	</body>
</html>