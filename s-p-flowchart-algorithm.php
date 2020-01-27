<!DOCTYPE html>
<html>
	<head>
		<title>S-P Algorithm Problem</title>
		<meta name="author" content="Andy Zhen">
		<meta name="description" content="Reading and solving algorithms with flowcharts.">
		<link rel="shortcut icon" href="https://s3.amazonaws.com/pix.iemoji.com/images/emoji/apple/ios-12/256/thinking-face.png">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
		<style type="text/css">
			html {
				background-color: #4A442D;
				padding: 20px;
				margin: 0;
				font-family: 'Source Sans Pro', sans-serif;
			}
			.content {
				padding: 20px;
				background-color: #9DCBBA;
				width: 60%;
				margin: auto;
				text-align: center;
			}
			.space10pxdown {
				margin-bottom: 10px;
			}
			.button {
				background-color: #4B88A2;
				margin-top: 6px;
				color: white;
				border-radius: 0.6em;
				padding: 4px 8px;
				font-size: 16px;
				font-family: 'Source Sans Pro', sans-serif;
			}
			.button:hover {
				background-color: #6B9DB2;
			}
			#description {
				width: 55%;
				margin: auto;
				margin-bottom: 16px;
			}
		</style>
	</head>
	<body>
		<div class="content">
			<h1>S-P Flowchart Algorithm</h1>
			<p id='description'>The flowchart below depicts the usage of this algorithm.
			When given an integer p and S is set to 12 by default, the algorithm goes through the steps
			until it reaches S=0. At this point, the p value is displayed.</p>
			<img class="space10pxdown" src="https://icsprogramming.ca/2019-2020/zhen4d333/images/algorithm.PNG">
			<p id='description'>Below is a video I created explaining this algorithm and flowchart. I would like to apologize in advance for the low-quality reording and the blatant watermark in the middle of the screen. A free trial <i>is</i> a free trial, after all.</p>
			<iframe class='space10pxdown' width="448" height="252" src="https://www.youtube.com/embed/OLUcRqSzziQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
			<form name="SP" action="s-p-flowchart-algorithm.php" method="post">
				<label for="pVal"><i>p</i> Value: </label>
				<input type="text" name="pVal" class="space10pxdown" value=<?echo $_POST['pVal'];?>><br>
				<input type="submit" name="subBtn" value="Run Calculations" class="button">
			</form>
			<?php
				function checkPrime($n) {
					for ($x = 2; $x <= $n/2; $x++) {
						if ($n % $x == 0){
							return 0;
						}
					}
					return 1;
				}
				function checkEven($n) {
					if($n % 2 == 0) {
						return 1;
					} else {
						return 0;
					}
				}

				if($_POST['subBtn']) {
					$p = $_POST['pVal'];
					if($p < 1) {
						echo "<p>The <i>p</i> value must be greater than or equal to 1.</p>";
					} else {
						$s = 12;
						echo "<p><b>Initial values:</b> p=" . $p . " and S=" . $s . "</p>";
						do {
							echo "<p>p=" . $p . " and S=" . $s . "</p>";
							if(checkEven($p)) {
								$p += 1;
								$toPrime = 1;
							} else {
								$toPrime = 1;
							}
							if($toPrime) {
								if(checkPrime($p)) {
									$toComparison = 1;
									$toPrime = 0;
								} else {
									$p += 2;
									$toPrime = 0;
								}
							}
							if($toComparison) {
								if(($p < $s)) {
									$s -= $p;
									$p += 2;
									$toComparison = 0;
								} else {
									$s -= 1;
									$toZero = 1;
									$toComparison = 0;
								}
							}
							if($toZero) {
								if($s == 0) {
									echo "<p><b>Final values:</b> p=" . $p . " and S=" . $s . "</p>";
									echo "<p><i>p</i> is now " . $p . ".</p>";
									$stop = 1;
								} else {
									$p += 2;
									$toZero = 0;
					
								}
							}
						} while ($stop != 1);
					}
				}
			?>
			<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
		</div>
	</body>
</html>