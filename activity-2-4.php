<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Activity 2.4 - Basic Calculator</title>
		<meta name="author" content="Andy Zhen">
		<meta name="description" content="A basic calculator made with PHP.">
		<link rel="shortcut icon" href="https://cdn.emojidex.com/emoji/seal/pocket_calculator.png?1417135511">
		<link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
		<style>
			body {
				font-family: 'Inconsolata', monospace;
				background-color: #677DB7;
				color: #191308;
				padding: 20px;
				line-height: 1.0em;
			}
			.content {
				width: 70%;
				margin: auto;
				padding: 10px;
				text-align: center;
				background-color: #9CA3DB;
				border-radius: 0.5em;
				border: 4px solid #454B66;
				overflow: hidden;
			}
			#basic {
				margin-left: 15px;
				margin-bottom: 15px;
				background-color: #B7BCE4;
				padding: 5px;
				width: 45%;
				border-radius: 0.5em;
				border: 1px solid #454B66;
				height: 250px;
				float: left;
			}
			#advanced {
				margin-right: 15px;
				margin-bottom: 15px;
				background-color: #B7BCE4;
				padding: 5px;
				width: 45%;
				border-radius: 0.5em;
				border: 1px solid #454B66;
				height: 250px;
				float:right;
			} 
			.inputstyles {
				background-color: #96b1fa;
				border: 2px solid #476cd1;
				border-radius: 0.3em;
			}
			.button {
				background-color: #e3d040;
				border: 2px solid #ab9d30;
				border-radius: 0.3em;
				font-size: 18px;
				font-family: 'Inconsolata', monospace;
			}
			.button:hover {
				background-color: #8a7c16;
				border: 2px solid #ab9d30;
				border-radius: 0.3em;
				font-size: 18px;
				font-family: 'Inconsolata', monospace;
			}
			.backarrow {
				text-align: center;
				margin: auto;
			}
			@media screen and (max-width: 1028px) {
			#basic {
				float: none;
				height: 60%;
				margin: auto;
				margin-bottom: 15px;
			}
			#advanced {
				float: none;
				height: 60%;
				margin: auto;
			}
		}
		</style>
	</head>
	<body>
		<div class="content">
			<h1><u>Basic Calculator</u></h1>
			<p>This basic calculator can perform basic operations on two integers between 0 and 10.</p>
			<p>Additionally, there are a number advanced operations available as well.</p>
			<hr width="90%">
			<div id="basic">
				<h3>Basic Operations</h3>
				<hr width="60%">
				<form name="basic" action="activity-2-4.php" method="post">
					<select name="var1" class="inputstyles">
						<option>Choose first integer</option>
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select><br><br>
					<input type="radio" name="operation" value="add">Add (+)</input><br>
					<input type="radio" name="operation" value="subtract">Subtract (-)</input><br>
					<input type="radio" name="operation" value="multiply">Multiply (x)</input><br>
					<input type="radio" name="operation" value="divide">Divide (÷)</input><br><br>
					<select name="var2" class="inputstyles">
						<option>Choose second integer</option>
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select><br>
					<hr width="60%">
					<input type="submit" name="subBtn" value="Submit" class="button">
				</form><br>
			</div>
			<div id="advanced">
				<h3>Advanced Operations</h3>
				<hr width="60%">
				<form name="advanced" action="activity-2-4.php" method="post">
					<input type="radio" name="operation2" value="sqrt">Square root of</input><br>
					<input type="radio" name="operation2" value="sin">Sine of</input><br>
					<input type="radio" name="operation2" value="cos">Cosine of</input><br>
					<input type="radio" name="operation2" value="tan">Tangent of</input><br><br>
					<select name="var3" class="inputstyles">
						<option>Choose integer</option>
						<option value="0">0</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
					</select><br>
					<hr width="60%">
					<input type="submit" name="subBtn2" value="Submit" class="button">
				</form>
			</div>
			<br><hr width="90%">
			<div>
				<h4><u>Results:</u></h4>
				<?
					$var1 = $_POST['var1'];
					$var2 = $_POST['var2'];
					$operation = $_POST['operation'];

					if ($_POST['subBtn'] AND $operation == "add"){
						echo "<b>" . $var1 . "</b> plus <b>" . $var2 . "</b> equals <b>";
						echo $var1 + $var2 . "</b>";
					} else if ($_POST['subBtn'] AND $operation == "subtract"){
						echo "<b>" . $var1 . "</b> minus <b>" . $var2 . "</b> equals <b>";
						echo $var1 - $var2 . "</b>";
					} else if ($_POST['subBtn'] AND $operation == "multiply"){
						echo "<b>" . $var1 . "</b> multiplied by <b>" . $var2 . "</b> equals <b>";
						echo $var1 * $var2 . "</b>";
					} else if ($_POST['subBtn'] AND $operation == "divide" AND $var2 != 0){
						echo "<b>" . $var1 . "</b> divided by <b>" . $var2 . "</b> equals <b>";
						echo $var1 / $var2 . "</b>";
					} else if ($_POST['subBtn'] AND $operation == "divide" AND $var2 == 0){
						echo "<b>" . $var1 . "</b> cannot be divided by zero!";
					} else if ($_POST['subBtn']) {
						echo "<i>Please ensure you have selected two integers and an operation.</i>";
					}
				?>
				<?
					$var3 = $_POST['var3'];
					$operation = $_POST['operation2'];

					if ($_POST['subBtn2'] AND $operation == "sqrt") {
						echo "The square root of <b>" . $var3 . "</b> is ";
						echo "</b> " . sqrt($var3) . "</b>";
					} else if ($_POST['subBtn2'] AND $operation == "sin") {
						echo "The sine of <b>" . $var3 . "</b> is ";
						echo "</b> " . sin($var3) . "</b>";
					} else if ($_POST['subBtn2'] AND $operation == "cos") {
						echo "The cosine of <b>" . $var3 . "</b> is ";
						echo "</b> " . cos($var3) . "</b>";
					} else if ($_POST['subBtn2'] AND $operation == "tan") {
						echo "The tangent of <b>" . $var3 . "</b> is ";
						echo "</b> " . tan($var3) . "</b>";
					} else if ($_POST['subBtn2']) {
						echo "<i>Please ensure you have selected an integer and an operation</i>";
					}
				?>
			</div>
			<br><hr width="90%"><br>
		</div>
		<div class="backarrow"><a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a></div>
	</body>
</html>