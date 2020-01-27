<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Activity 2.4d - Dice Game</title>
		<meta name="author" content="Andy Zhen">
		<meta name="description" content="A cool dice game.">
		<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
		<link href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/81/game-die_1f3b2.png" rel="shortcut icon">
		<style type="text/css">
			html {
				padding: 20px;
				background-color: #F2F4FF;
				text-align: center;
				font-family: 'Nunito', sans-serif;
			}
			.content {
				width: 70%;
				padding: 20px;
				background-color: #96C5F7;
				margin: auto;
				border: 6px solid #6C756B;
			} 
			h1 {
				color: #494f49;
			}
			.diceimg {
				background-color: white;
			}
			fieldset {
				width: 30%;
				margin: auto;
				padding: 15px;
			}
			legend {
				color: #3B403B;
			}
			.button {
				font-family: 'Nunito', sans-serif;
				background-color: #526C87;
				padding: 8px;
				font-size: 16px;
				border-radius: 0.8em;
				color: white;
				border: 2px solid #3B403B;
			}
			.button:hover {
				font-family: 'Nunito', sans-serif;
				background-color: #293644;
				padding: 8px;
				font-size: 16px;
				border-radius: 0.8em;
				color: white;
				border: 2px solid #3B403B;
			}
			hr {
				margin-top: 6px;
				margin-bottom: 6px;
			}
			.description {
				margin: 20px;
				padding: 5px;
				width: 70%;
				border: 1px dashed black;
				margin-left: auto;
				margin-right: auto;
			}
			.hidden {
				display: none;
			}
			.error {
				color: red;
			}
			.backarrow {
				float: left;
			}
			.gameoverbox {
				border: 1px solid black;
				width: 20%;
				margin: auto;
			}
		</style>
	</head>
	<body>
		<a href="https://icsprogramming.ca/2019-2020/zhen4d333/" class="backarrow"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
		<div class="content">
			<h1>Dice Game! <hr width="40%"></h1>
			<div class="description"><i>Guess a number between 1 to 6 and select a wager. If you guess the number rolled, you win double your wager, however, if you lose, you lose your entire wager.</i></div><hr width='80%'>

			<?php
			//win-loss-rolls initialization
			if ($_SESSION['wins'] == "") { 
				$wins = 0;
			}
			if ($_SESSION['losses'] == "") { 
				$losses = 0;
			}
			if ($_SESSION['totalrolls'] == "") {
				$totalrolls = 0;
			}

			// check for reset 
			if ($_GET['reset'] == "yes") {
				$_SESSION['wins'] = 0;
				$_SESSION['losses'] = 0;
				$totalrolls = 0;
				echo "<p>The game has been reset.</p>";
			} 

				if ($_POST['subBtn']) {
				$wins = $_SESSION['wins'];
				$losses = $_SESSION['losses'];
				$totalrolls = $_SESSION['totalrolls'];
				$credits = $_POST['numCredits'];
				$wager = $_POST['wager'];
				$guess = $_POST['guess'];

				//roll function
				$roll = rand(1,6);

				//win-loss function
				if (isset($guess)) {
					echo "<p>You guessed that the number would be <b>" . $guess . "</b>.</p>";
					echo "<p>You rolled a <b>" . $roll . ".</b></p>";
					echo "<img src=\"images/die" . $roll . ".gif\" alt=\"die image\" class= \"diceimg\">";

					$totalrolls += 1;

					if ($roll == $guess) {
						$wins += 1;
						$winnings = $wager * 2;
						$credits += $winnings;
						echo "<p>You guessed the right number. You have earned " . $winnings . " credits.</p>";
					} else {
						$losses += 1;
						$credits -= $wager;
						echo "<p>You did not guess the right number. You have lost " . $wager . " credits.</p>";
					} 

					$_SESSION['wins'] = $wins;
					$_SESSION['losses'] = $losses;
					$_SESSION['totalrolls'] = $totalrolls;

				} else if(!isset($guess)) {
					//error checking for empty guess
					echo "<u class='error'>Please make a guess.</u><br>";
				}
			} else {
					$credits = 10;
					$wins = $losses = $totalrolls = 0;
					session_destroy();
			} if ($_GET['debug'] == "yes") {
				$credits = $_POST['numCredits'];
				$credits += 999999;
			}
			?>
			<div id="game" <? if($credits == 0) {echo "class='hidden'";} ?>>
				<form name='dicegame' action='activity-dice-game.php' method='post'>
					<input type='hidden' id='numCredits' name='numCredits' value=<?php echo $credits; ?> >
					<fieldset>
						<legend> Guess a number </legend>
						<input type='radio' name='guess' value='1'>1
						<input type='radio' name='guess' value='2'>2
						<input type='radio' name='guess' value='3'>3
						<input type='radio' name='guess' value='4'>4
						<input type='radio' name='guess' value='5'>5
						<input type='radio' name='guess' value='6'>6
					</fieldset><br>
					<fieldset>
						<legend> Select your wager </legend>
						<input type='number' id='wager' name='wager' style='width: 20%; margin-bottom: 10px;' value='1' min='1' max=<?echo $credits;?> > Credits
						<?php
						echo "<br>You have " . $credits . " available";
						?>
					</fieldset><br>
					<input type='submit' name='subBtn' value="Roll The Die!" class="button"><br>
				</form>
			</div>
			<div <?if ($credits == 0) {echo "class='error'";} else if($credits != 0) {echo "class='hidden'";}?>>
				<?
				if ($credits == 0) {
					echo "<div class='gameoverbox'>";
					echo "GAME OVER";
					echo "<br><a href='activity-dice-game.php?reset=yes'>RESET</a>";
					echo "</div>";
				}
				?>
			</div>
			<div>
			<?
				//game stats
					if ($totalrolls != 0) {
						$winperc = ($wins / $totalrolls) * 100;
						$lossperc = ($losses / $totalrolls) * 100;
					}
					echo "<br><hr width='80%'>You have rolled the dice " . $totalrolls . " times.";
					echo "<br>Wins: " . (float) $wins . " | Losses: " . (float) $losses;
					echo "<br>Win Percentage: " . number_format($winperc, 2) . "% | Loss Percentage: " . number_format($lossperc, 2) . "%<hr width='80%'>";
			?>
			</div>
	</body>
</html>