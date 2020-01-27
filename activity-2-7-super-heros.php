<?php
session_start();
session_set_cookie_params(0);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Football Game (2.7 - Super Heroes)</title>
		<meta charset="utf-8">
		<meta name="Author" content="Andy Zhen">
		<meta name="Description" content="Using multidimensional associative arrays to create a battling game.">
		<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
		<link href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/emoji-one/98/american-football_1f3c8.png" rel="shortcut icon">
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
			<script>
	        	$(document).ready(function() {
				  function toggleStats() {
				    $('.statbox').toggleClass('statboxvisible');
				  }
			  	 if (localStorage.getItem('switch-state') && localStorage.getItem('switch-state') === "true") {
				    $('#toggle').addClass('statboxvisible');
				    toggleStats(); 
				  }
				 $('#toggle').click(function() {
				    let a = $('#toggle');
				    toggleStats();
				    a.toggleClass('statboxvisible');
				    localStorage.setItem('switch-state', a.hasClass('statboxvisible'));
				  });
				});
           </script>
		<style type="text/css">
			html {
				background: url(images/thfield.jpg) no-repeat center center fixed; 
				  -webkit-background-size: cover;
				  -moz-background-size: cover;
				  -o-background-size: cover;
				  background-size: cover;
				padding: 20px;
				font-family: 'Nunito', sans-serif;
			}
			.content {
				width: 65%;
				text-align: center;
				margin: auto;
				background: rgba(255, 255, 255, 0.85);
				padding: 20px;
			}
			.statbox {
				display: none;
			}
			.statboxvisible {
				display: block !important;
			}
			h1 {
				margin: 0;
				padding: 0;
				line-height: 1;
				clear: both;
			}
			h1 {
				margin: 0;
				padding: 0;
				line-height: 1;
			}
			hr {
				margin-bottom: 8px;
			}
			#teamlistwrapper {
				display: flex;
			}
			.teamlist {
				border: 3px solid black;
				margin: auto;
				margin-left: 10px;
				margin-right: 10px;
				line-height: 0.5;
				flex-basis: 100%;
				display: inline-block;
				padding-left: 8px;
				padding-right: 8px;
				background: rgba(255, 255, 255, 0.90);
			}
			.selected {
				background: rgba(175, 179, 186, 0.90) !important;
				border: 3px dashed black !important;
			}
			.player {
				background: rgba(255, 255, 255, 0.90);
				border: 1px dotted white;
				margin-bottom: 10px;
				margin-top: 10px;
			}
			.teamlist h2 {
				margin-bottom: 24px;
				text-decoration: underline;
			}
			.teamlist h3 {
				margin-top: 24px;
			}
			.teamlist img {
				height: 210px;
				width: 196px;
			}
			#battlewrapper {
				margin-top: 16px !important;
				margin-bottom: 16px;
				display: block;
				background: rgba(255, 255, 255, 0.90);
				border: 1px solid black;
				width: 85%;
				margin: auto;
			}
			.button {
				background-color: #35a671;
				color: black;
				font-size: 18px;
				padding: 8px;
				font-family: 'Nunito', sans-serif;
				text-decoration: none !important;
				border-radius: 0.7em;
				margin-top: 10px;
				margin-bottom: 10px;
				margin-right: 10px;
			}
			.button:hover {
				background-color: #185237;
				color: white;
				font-size: 18px;
				padding: 8px;
				font-family: 'Nunito', sans-serif;
				text-decoration: none !important;
				border-radius: 0.7em;
				margin-top: 10px;
				margin-bottom: 10px;
				margin-right: 10px;
			}
			.win {
				color: green;
			}
			.loss {
				color: red;
			}
			.togglebutton {
				display: inline-block;
				float: left;
				font-size: 14px;
				background-color: #35a671;
				color: black;
				padding: 6px;
				border-radius: 0.7em;
				font-family: 'Nunito', sans-serif;
				text-decoration: none !important;
				margin-right: 8px;
			}
			.togglebutton:hover {
				display: inline-block;
				float: left;
				font-size: 14px;
				background-color: #185237;
				color: white;
				padding: 6px;
				border-radius: 0.7em;
				font-family: 'Nunito', sans-serif;
				text-decoration: none !important;
				margin-right: 8px;
			}
			#notice {
				font-size: 7px;
				text-align: left;
			}
			.backarrow {
				width: 80px !important;
				height: 80px !important;
				border: 0 !important;
				float: right;
			}
			#description {
				text-align: justify;
				width: 94%;
				font-size: 12px;
				margin: auto;
			}
			.posovr {
				color: blue;
			}
			@media only screen and (max-width: 450px) {
			  html {
			    background: url(images/thfield.jpg);
			  }
			  h2 {
			  	font-size: 14px !important;
			  }
			  #teamlistwrapper {
			  	display: inline-block;
			  }
			  .teamlist {
			  	flex: none;
			  }
			}
		</style>
	</head>
	<body>
		<div class="content">
			<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" class="backarrow" alt="Back to Index Page (this image is not displaying because of an error)."></a>
			<p id="notice">NOTICE: These stat values are not meant to be 100% realistic. I don't actually watch Canadan football, so yeah...</p>
       		<button id="toggle" class="togglebutton">Toggle Player Stat Visibility</button>
       		<a name="reset" class="togglebutton" href='https://icsprogramming.ca/2019-2020/zhen4d333/activity-2-7-super-heros.php?reset=yes'>Reset Game</a><br>
			<h1>"Football Game"</h1>
			<h3>Activity 2.7 - Multidimensional Arrays</h3>
			<hr width="80%">
			<p id="description">This game was created with the use of Multidimensional Arrays in PHP. In this game, you play as a simplified version of a CFL football team–– the Hamilton Tiger-Cats, against the Saskatchewan RoughRiders. Each player has a speed, catching, and strength stat assigned to them. A random player from each team will be generated, and you must chose a stat to battle the opponent with. By default, the stats are hidden, but you may use the toggle button to show them.</p>
			<hr width="80%"><br>
			<?php
				if ($_GET['reset'] == "yes") {
					$_SESSION['wins'] = 0;
					$_SESSION['losses'] = 0;
					$_SESSION['ties'] = 0;
					$_SESSION['total'] = 0;
					echo "<p class='win'>The game has been reset.</p>";
				}
				if ($_SESSION['wins'] == "") { 
					$_SESSION['wins'] = 0;
				}
				if ($_SESSION['losses'] == "") { 
					$_SESSION['losses'] = 0;
				}
				if ($_SESSION['ties'] == "") { 
					$_SESSION['ties'] = 0;
				}
				if ($_SESSION['total'] == "") { 
					$_SESSION['total'] = 0;
				}
				$wins = $_SESSION['wins'];
				$losses = $_SESSION['losses'];
				$ties = $_SESSION['ties'];
				$total = $_SESSION['total'];

				$ticats = array(
					"Brandon Banks" => array(
						"image" => "<img src='https://d3ham790trbkqy.cloudfront.net/wp-content/uploads/2016/07/Banks_Brandon1-280x300.png'>",
						"position" => "WR",
						"overall" => "82",
						"speed" => 97,
						"catching" => 90,
						"strength" => 60,
					), 
					"Chris Van Zeyl" => array(
						"image" => "<img src='https://d3ham790trbkqy.cloudfront.net/wp-content/uploads/2016/07/VanZeyl_Chris1-280x300.png'>",
						"position" => "OL",
						"overall" => "60",
						"speed" => 70,
						"catching" => 13,
						"strength" => 97,
					), 
					"Simoni Lawrence" => array(
						"image" => "<img src='https://d3ham790trbkqy.cloudfront.net/wp-content/uploads/2016/07/Lawrence_Simoni1-280x300.png'>",
						"position" => "LB",
						"overall" => "80",
						"speed" => 81,
						"catching" => 72,
						"strength" => 86,
					), 
					"Maleek Irons" => array(
						"image" => "<img src='https://d3ham790trbkqy.cloudfront.net/wp-content/uploads/2019/05/Irons_Maleek1-280x300.png'>",
						"position" => "RB",
						"overall" => "76",
						"speed" => 92,
						"catching" => 68,
						"strength" => 69,
					), 
					"Julian Howsare" => array(
						"image" => "<img src='https://d3ham790trbkqy.cloudfront.net/wp-content/uploads/2018/02/Howsare_Julian1-280x300.png'>",
						"position" => "DE",
						"overall" => "51",
						"speed" => 53,
						"catching" => 22,
						"strength" => 79,
					), 
				);
				$roughriders = array(
					"William Powell" => array(
						"image" => "<img src='https://d3ham790trbkqy.cloudfront.net/wp-content/uploads/2016/07/PowellWilliam_11_circle-280x300.png'>",
						"position" => "RB",
						"overall" => "82",
						"speed" => 91,
						"catching" => 70,
						"strength" => 84,
					), 
					"Charleston Hughes" => array(
						"image" => "<img src='https://d3ham790trbkqy.cloudfront.net/wp-content/uploads/2016/07/HughesCharleston_1_circle-280x300.png'>",
						"position" => "DL",
						"overall" => "66",
						"speed" => 74,
						"catching" => 28,
						"strength" => 95,
					), 
					"Philip Blake" => array(
						"image" => "<img src='https://d3ham790trbkqy.cloudfront.net/wp-content/uploads/2016/07/BlakePhilip_1_Circle-280x300.png'>",
						"position" => "OL",
						"overall" => "54",
						"speed" => 47,
						"catching" => 24,
						"strength" => 91,
					), 
					"Ed Gainey" => array(
						"image" => "<img src='https://d3ham790trbkqy.cloudfront.net/wp-content/uploads/2016/07/GaineyEd_1_circle-280x300.png'>",
						"position" => "DB",
						"overall" => "82",
						"speed" => 88,
						"catching" => 86,
						"strength" => 73,
					), 
					"Jon Ryan" => array(
						"image" => "<img src='https://d3ham790trbkqy.cloudfront.net/wp-content/uploads/2019/05/RyanJon_1_circle-280x300.png'>",
						"position" => "P",
						"overall" => "74",
						"speed" => 53,
						"catching" => 69,
						"strength" => 100,
					), 
				);

				$statchoice = $_POST['statchoice'];

				if(!isset($_POST['ticatplayer'])) {
					$randTiCats = array_rand($ticats);
					$playerTiCats = $ticats[$randTiCats];
				} else {
					$randTiCats = $_POST['ticatplayer'];
					$playerTiCats = $ticats[$randTiCats];
				}

				if(!isset($_POST['riderplayer'])) {
					$randRoughRiders = array_rand($roughriders);
					$playerRoughRiders = $roughriders[$randRoughRiders];
				} else {
					$randRoughRiders = $_POST['riderplayer'];
					$playerRoughRiders = $roughriders[$randRoughRiders];
				}

				echo "<div id='teamlistwrapper'><div class='teamlist'><h2>Hamilton Tiger-Cats</h2>";
				foreach ($ticats as $player => $statistics) {
					if ($player == $randTiCats) {
						echo "<div class='player selected'><h3>" . $player . "</h3>";
						foreach ($statistics as $key => $value) {
							if ($key != "image") {
								if ($key == "position" or $key == "overall") {
									echo "<div class='statbox'><p>" . $key . " : <span class='posovr'>" . $value . "</span></p></div>";
								} else {
									echo "<div class='statbox'><p>" . $key . " : " . $value . "</p></div>";
								}
							} else {
								echo "<p>" . $value . "</p>";
							}
						}
						echo "</div>";
					} else {
						echo "<div class='player'><h3>" . $player . "</h3>";
						foreach ($statistics as $key => $value) {
							if ($key != "image") {
								if ($key == "position" or $key == "overall") {
									echo "<div class='statbox'><p>" . $key . " : <span class='posovr'>" . $value . "</span></p></div>";
								} else {
									echo "<div class='statbox'><p>" . $key . " : " . $value . "</p></div>";
								}
							} else {
								echo "<p>" . $value . "</p>";
							}
						}
						echo "</div>";
					}
				}
				echo "</div><div class='teamlist'><h2>Saskatchewan Roughriders</h2>";
				foreach ($roughriders as $player => $statistics) {
					if ($player == $randRoughRiders) {
						echo "<div class='player selected'><h3>" . $player . "</h3>";
						foreach ($statistics as $key => $value) {
							if ($key != "image") {
								if ($key == "position" or $key == "overall") {
									echo "<div class='statbox'><p>" . $key . " : <span class='posovr'>" . $value . "</span></p></div>";
								} else {
									echo "<div class='statbox'><p>" . $key . " : " . $value . "</p></div>";
								}
							} else {
								echo "<p>" . $value . "</p>";
							}
						}
						echo "</div>";
					} else {
						echo "<div class='player'><h3>" . $player . "</h3>";
						foreach ($statistics as $key => $value) {
							if ($key != "image") {
								if ($key == "position" or $key == "overall") {
									echo "<div class='statbox'><p>" . $key . " : <span class='posovr'>" . $value . "</span></p></div>";
								} else {
									echo "<div class='statbox'><p>" . $key . " : " . $value . "</p></div>";
								}
							} else {
								echo "<p>" . $value . "</p>";
							}
						}
						echo "</div>";
					}
				}
				echo "</div></div>";
			?>
			<div id="battlewrapper">
				<?php
				$ticatresult = $_POST['ticatplayer'];
				$riderresult = $_POST['riderplayer'];
				echo "<p><u>" . $randTiCats . "</u> is battling <u>" . $randRoughRiders .  "</u>!</p>";
				echo "<p>Choose a statistic to battle with.</p>";
				?>
				<form name="battle" method="post" action="https://icsprogramming.ca/2019-2020/zhen4d333/activity-2-7-super-heros.php">
						<input type='hidden' name='ticatplayer' value=<?echo "'" . $randTiCats . "'";?>>
						<input type='hidden' name='ticatplayerstat' value=<?echo $playerTiCats[$statchoice];?>>
						<input type='hidden' name='riderplayer' value=<?echo "'" . $randRoughRiders . "'";?>>
						<input type='hidden' name='riderplayerstat' value=<?echo $playerRoughRiders[$statchoice];?>>
						<input type="radio" name="statchoice" id="speed" value="speed" <?php if ($_POST['statchoice'] == 'speed') {echo 'checked';} if(isset($_POST['ticatplayer']) and $ticats[$ticatresult][$statchoice] != 0) {echo 'disabled';} ?>>
						<label for="speed">Speed  |  </label>
						<input type="radio" name="statchoice" id="catching" value="catching" <?php if ($_POST['statchoice'] == 'catching') {echo 'checked';} if(isset($_POST['ticatplayer']) and $ticats[$ticatresult][$statchoice] != 0) {echo 'disabled';} ?>>
						<label for="catching">Catching  |  </label>
						<input type="radio" name="statchoice" id="strength" value="strength" <?php if ($_POST['statchoice'] == 'strength') {echo 'checked';} if(isset($_POST['ticatplayer']) and $ticats[$ticatresult][$statchoice] != 0) {echo 'disabled';} ?>>
						<label for="strength">Strength</label><br>
						<?
						if(isset($_POST['ticatplayer']) and $ticats[$ticatresult][$statchoice] != 0) {
							echo "<p><a href='https://icsprogramming.ca/2019-2020/zhen4d333/activity-2-7-super-heros.php' class='button'>Play Again</a><br></p>";
						} else {
							echo "<input type='submit' name='subBtn' class='button' value='Battle'>";
						}
						?>
						
				</form>
			</div>
			<?php
				$ticatstat = $ticats[$ticatresult][$statchoice];
				$riderstat = $roughriders[$riderresult][$statchoice];

				if($_POST['subBtn']) {
					if(isset($statchoice)) {
						echo "<div id='battlewrapper'>";
						if($ticatstat > $riderstat) {
							echo "<p class='win'>You won! " . $ticatresult . "'s " . $statchoice . " stat is higher than " . $riderresult . "'s.</p>";
							$wins += 1;
							$_SESSION['wins'] = $wins;
						} elseif(!isset($ticatstat) or !isset($riderstat)) {
							unset($randTiCats);
							unset($randRoughRiders);
						} elseif($ticatstat == $riderstat) {
							echo "<p>You tied. " . $ticatresult . "'s " . $statchoice . " stat is the same as " . $riderresult . "'s.</p>";
							$ties += 1;
							$_SESSION['ties'] = $ties;
						} elseif($ticatstat < $riderstat) {
							echo "<p class='loss'>You lost. " . $ticatresult . "'s " . $statchoice . " stat is lower than " . $riderresult . "'s.</p>";
							$losses += 1;
							$_SESSION['losses'] = $losses;
						}
						$total = $wins + $losses + $ties;
						$_SESSION['total'] = $total;
						echo "</div>";
					} else {
						echo "<p class='loss'>Please select a stat.</p>";
						$randTiCats = $_POST['ticatplayer'];
						$playerTiCats = $ticats[$randTiCats];
						$randRoughRiders = $_POST['riderplayer'];
						$playerRoughRiders = $roughriders[$randRoughRiders];
					}
				}

				if($total > 0) {
					echo "<div id='battlewrapper'>";
					echo "<p>Wins: <span class='win'>" . $wins . "</span> | Ties: " . $ties . " | Losses: <span class='loss'>" . $losses . "</span></p>";
					echo "<p>Win Percentage: " . number_format(($wins/$total)*100, 1) . "% | Tie Percentage: " . number_format(($ties/$total)*100, 1) . "% | Loss Percentage: " . number_format(($losses/$total)*100, 1) . "%</p>";
					echo "<p>Total Times Played: " . $total . "</p>";
					echo "</div>";
				}
				exit();
			?>
		</div>
	</body>
</html>