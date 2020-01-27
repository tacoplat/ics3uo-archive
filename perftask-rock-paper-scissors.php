<?
session_start();
function randomizeMove(){
	$cpumove = rand(1,3);
		if($cpumove == 1) {
			global $cpumove;
			$cpumove = "rock";
		} elseif($cpumove == 2) {
			global $cpumove;
			$cpumove = "paper";
		} elseif($cpumove == 3) {
			global $cpumove;
			$cpumove = "scissors";
		}
}
	$playermove = $_POST['move'];
	$wins = $_SESSION['wins'];
	if($_POST['subBtn']){
		if(isset($playermove)){
			randomizeMove();
			if(($playermove == "rock" and $cpumove == "scissors") or ($playermove == "paper" and $cpumove == "rock") or ($playermove == "scissors" and $cpumove == "paper")){
				$wins += 1;
			} elseif(($playermove == "rock" and $cpumove == "rock") or ($playermove == "paper" and $cpumove == "paper") or ($playermove == "scissors" and $cpumove == "scissors")) {
				$wins += 0;
			} else {
				$wins = 0;
			}
			$_SESSION['wins'] = $wins;
			if($_SESSION['wins'] > $_SESSION['oldwins']) {
				$_SESSION['oldwins'] = $_SESSION['wins'];
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Rock Paper Scissors</title>
		<meta name="Author" content="Andy Zhen">
		<meta name="Description" content="A cool rock paper scissors game.">
		<link href="https://fonts.googleapis.com/css?family=Alata&display=swap" rel="stylesheet">
		<link href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/76/moyai_1f5ff.png" rel="shortcut icon">
		<style type="text/css">
			html {
				padding: 0;
				margin: 0;
				font-family: 'Alata', sans-serif;
				background-color: #AFD0D6;
			}
			body {
				padding: 0;
				margin: 0;
			}
			.fixheading {
				margin-top: 4px;
			}
			#header {
				background-color: #36393B;
				color: #A3A5A5;
				width: 100%;
				margin: 0;
				padding: 16px;
				border-bottom: 6px outset #A3A5A5;
			}
			#header a {
				color: #A3A5A5;
				text-decoration: none;
			}
			#header a:hover {
				color: #C8C9C9;
			}
			#heading {
				margin-left: 20px;
			}
			#wintracker {
				position: absolute;
				display: inline-block;
				padding: 0px 18px 4px;
				color: #36393B;
				margin: auto;
				right: 8px;
				top: 8px;
				height: 100px;
				width: 260px;
				background-color: #C8C9C9;
				line-height: 0.6;
			}
			.graphic {
				width: 40%;
				display: inline-block;
				background-color: white;
				margin-left: 8px;
				margin-right: 8px;
				border: 2px solid white;
			}
			.graphicwrap {
				margin-top: 32px;
				text-align: center;
			}
			.graphicheader {
				background-color: #C8C9C9;
				display: block;
				position: relative;
				top: 0;
				margin: 0;
				height: 50px;
				width: 100%;
				color: #36393B;
			}
			.graphicheader h2 {
				line-height: 1;
				padding: 8px;
				margin: 0;
				transform: translateY(10%);
			}
			.controlsresults {
				width: 50%;
				text-align: center;
				display: block;
				margin-top: 32px !important;
				margin-bottom: 32px !important;
				padding: 18px;
				background-color: white;
				margin: auto;
				border: 2px solid white;
			}
			.controlresults p {
				margin-top: 0px !important;
				line-height: 1;
			}
			.button {
				background-color: #AFD0D6;
				color: #232526 !important;
				font-family: 'Alata', sans-serif;
				font-size: 16px;
				padding: 4px 10px;
				margin-top: 16px;
				border-radius: 0.6em;
				text-decoration: none;
			}
			#hidden {
				display: none;
			}
			.reset {
				float: right;
				padding: 8px 12px;
				width: 60px;
				text-align: center;
			}
			.reset a, a:visited{
				color: #232526;
			}
			#desc {
				width: 65%;
				margin: auto;
				margin-top: 32px;
			}
		</style>
		<script>
		function changeMove(value) {
			var img = document.getElementById("moveimg");
			var cpuimg = document.getElementById("cpuimg");
			switch(value) {
				case "rock":
					img.src="/2019-2020/zhen4d333/images/rpsrock.png";
					break;
				case "paper":
					img.src="/2019-2020/zhen4d333/images/rpspaper.png";
					break;
				case "scissors":
					img.src="/2019-2020/zhen4d333/images/rpsscissors.png";
					break;
				default:
					img.src="/2019-2020/zhen4d333/images/rpshidden.png";
					break;
			}
			cpuimg.src="/2019-2020/zhen4d333/images/rpshidden.png";
		}
		</script>
	</head>
	<body>
		<header id="header">
			<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><h1 id="heading">Rock, Paper, Scissors</h1></a>
			<div id="wintracker">
				<h3><u>Win Tracker</u></h3>
				<a class="button reset" href="https://icsprogramming.ca/2019-2020/zhen4d333/perftask-rock-paper-scissors.php?reset=yes">Reset</a>
				<?
					if(!isset($_SESSION['wins']) or $_GET['reset'] == "yes") {
						$wins = $_SESSION['wins'] = 0;
						$_SESSION['oldwins'] = 0;
					}
					if($_GET['reset'] == "yes") {
						$_SESSION['oldwins'] = 0;
					}
					echo "<p>Wins: " . $_SESSION['wins'] . "</p>";
					echo "<p>High Score: " . $_SESSION['oldwins'] . "</p>";
				?>
			</div>
		</header>
		<p id="desc">Rock, Paper, Scissors: Choose a move and press Play. Rock beats scissors, paper beats rock, and scissors beats paper. Your high score is counted. If there is a tie, your streak will not be broken, however, if you lose, it will.</p>
		<div class="graphicwrap">
			<div class="graphic">
				<div class="graphicheader">
					<h2>Your Move</h2>
				</div>
				<?php
					switch ($playermove) {
						case 'rock':
							echo "<img src=\"/2019-2020/zhen4d333/images/rpsrock.png\" id=\"moveimg\">";
							break;
						case 'paper':
							echo "<img src=\"/2019-2020/zhen4d333/images/rpspaper.png\" id=\"moveimg\">";
							break;
						case 'scissors':
							echo "<img src=\"/2019-2020/zhen4d333/images/rpsscissors.png\" id=\"moveimg\">";
							break;
						default:
							echo "<img src=\"/2019-2020/zhen4d333/images/rpshidden.png\" id=\"moveimg\">";
							break;
					}
				?>
			</div>
			<div class="graphic">
				<div class="graphicheader">
					<h2>Computer's Move</h2>
				</div>
				<?php
					if(!empty($cpumove)) {
						switch ($cpumove) {
							case "rock":
								echo "<img id='cpuimg' src='/2019-2020/zhen4d333/images/rpsrockcpu.png'>";
								break;
							case "paper":
								echo "<img id='cpuimg' src='/2019-2020/zhen4d333/images/rpspapercpu.png'>";
								break;
							case "scissors":
								echo "<img id='cpuimg' src='/2019-2020/zhen4d333/images/rpsscissorscpu.png'>";
								break;
							default:
								break;
						}
					} else {
						echo "<img src='/2019-2020/zhen4d333/images/rpshidden.png'>";
					}
				?>
			</div>
		</div>
		<div class="controlsresults">
			<h3 class="fixheading">Choose a move.</h3>
			<form name="rps" method="post" action="perftask-rock-paper-scissors.php">
				<label for="rock">Rock</label>
				<input type="radio" name="move" id="rock" value="rock" onclick="changeMove(this.value)">
				<label for="paper">Paper</label>
				<input type="radio" name="move" id="paper" value="paper" onclick="changeMove(this.value)">
				<label for="scissors">Scissors</label>
				<input type="radio" name="move" id="scissors" value="scissors" onclick="changeMove(this.value)"><br>
				<input type="submit" name="subBtn" value="Play" class="button">
			</form>
		</div>
		<?php
			if($_POST['subBtn']){
				if(isset($playermove)){
					echo "<div class='controlsresults'>";
						if(($playermove == "rock" and $cpumove == "scissors") or ($playermove == "paper" and $cpumove == "rock") or ($playermove == "scissors" and $cpumove == "paper")){
							echo "<p><span style='color: green;'>You win.</span></p>";
						} elseif(($playermove == "rock" and $cpumove == "rock") or ($playermove == "paper" and $cpumove == "paper") or ($playermove == "scissors" and $cpumove == "scissors")) {
							echo "<p>You tied.</p>";
						} else {
							echo "<p><span style='color: red;'>You lost.</span></p>";
						}
					echo "</div>";
				} else {
					echo "<div class='controlsresults'><p><span style='color:red;'>Please choose a move.</span></p></div>";
				}
			} 
		?>
	</body>
</html>