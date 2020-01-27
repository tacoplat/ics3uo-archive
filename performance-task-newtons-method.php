<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Newton's Method</title>
		<meta name="Author" content="Andy Zhen">
		<meta name="Description" content="Performance Task #3 - Newton's Method">
		<link href="https://losangeles.cbslocal.com/wp-content/uploads/sites/14984641/2018/02/shutterstock_523825942.jpg?w=1500" rel="shortcut icon">
		<link href="https://fonts.googleapis.com/css?family=Bitter|Calistoga&display=swap" rel="stylesheet">
		<style type="text/css">
			html {
				padding: 0;
				margin: 0;
				height: 100%;
				background-color: #787A7C;
				font-family: 'Bitter', sans-serif;
			}
			body {
				padding: 0;
				margin: 0;
			}
			#header {
				background-color: #1985A1;
				color: #DCDCDD;
				width: 100%;
				margin: 0;
				padding: 14px;
			}
			#heading {
				margin-left: 20px;
				font-family: 'Calistoga', sans-serif;
			}
			#backarrow {
				float: right;
				height: 100px;
				margin-right: 20px;
				display: inline-block;
			}
			#content {
				width: 75%;
				height: 100%;
				background-color: #EBEBEC;
				margin: auto;
				padding: 16px;
				margin-top: 0;
			}
			.spacing20 {
				margin-top: 20px;
			}
			.spacing20down {
				margin-bottom: 20px;
			}
			.error {
				color: red;
			}
			.lineheight170 {
				line-height: 1.7;
			}
			.button {
				background-color: #1985A1;
				font-size: 14px;
				padding: 4px 12px;
				font-family: 'Calistoga', sans-serif;
				color: #EBEBEC;
				border-radius: 0.4em;
			}
			.button:hover {
				background-color: #136176;
			}
			.input {
				font-size: 16px;
				font-family: 'Bitter', sans-serif;
			}
			#references {
				font-size: 8px;
			}
		</style>
	</head>
	<body>
	<?
	$a = $_POST['initial'];
	$n = $_POST['recursions'];
	?>
		<div id="header">
			<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img id="backarrow" src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" alt="Back to Index Page (this image is not displaying because of an error)."></a>
			<h1 id="heading">Newton's Method</h1>
		</div>
		<div id="content">
			<h2>What is Newton's Method?</h2>
			<img src="https://latex.codecogs.com/gif.latex?x_{n}&space;=&space;\frac{1}{2}(x_{n}&plus;\frac{a}{x_{n}})"/>
			<p class="lineheight170"><u>Newton's Method</u> is a recursive algorithm improved by Isaac Newton which can be used to determine the square root of a number by hand. The more recursions that occur, the greater the accuracy of the calculation.<br><br>A recursive algorithm is an equation that uses its output in further iterations of itself. In this example, <i>x</i> is calculated by using the previous <i>x</i> value.<br><br>In the above equation, <i>a</i> is the initial number, <i>n</i> is the nth iteration of the algorithm and <i>x</i> is an output.<br>Here is an illustration of Newton's Method in action with a=91:</p>
			<img src='/2019-2020/zhen4d333/images/newtonmethod.png'>
			<h2>Estimate the Square Root of <i>a</i></h2>
			<form name="squareRoot" action="performance-task-newtons-method.php" method="post">
				<label for="initial">Initial Value (to be square-rooted), <i>a</i>: </label>
				<input type="text" class="input" name="initial" value=<?if(isset($a)){echo $a;}?>><br>
				<label for="recursions">Number of Recursions, <i>n</i>: </label>
				<input type="text" name="recursions" placeholder="Maximum of 20" max="20" class="input spacing20" value=<?if(isset($n)){echo $n;}?>><br>
				<input type="submit" name="subBtn" class="spacing20 spacing20down button" value="Root It!">
			</form>
			<?
			if($_POST['subBtn']) {
				if(isset($a) and isset($n)) {
					if(is_numeric($a) and is_numeric($n)) {
						if($n>0 and $n<=20){
							for ($i=0; $i < $n; $i++) { 
								if($i==0) {
									$x=$a;
									$newValue = number_format(0.5 * ($x + $a/$x), 4);
									echo "<img class='spacing20down' src=\"https://latex.codecogs.com/gif.latex?x_{".$i."}&space;=&space;\\frac{1}{2}(".$x."&plus;\\frac{".$a."}{".$x."})=".$newValue."\"/><br>";
								}
								$newValue = number_format(0.5 * ($x + $a/$x), 4);
								$nextNewValue = number_format(0.5 * ($newValue + $a/$newValue), 4);
								$x = number_format($newValue, 4);
								echo "<img class='spacing20down' src=\"https://latex.codecogs.com/gif.latex?x_{".($i+1)."}&space;=&space;\\frac{1}{2}(".$x."&plus;\\frac{".$a."}{".$x."})=".$nextNewValue."\"/><br>";
							}
							echo "<p>The actual square root of " . $a . " is approximately " . (number_format(sqrt($a),4)) . ".</p>";
							echo "<p>The estimation was off by " . (abs(number_format(sqrt($a)-$x, 4))) . ".</p>";
						} else {
							echo "<p class='error'>Please ensure the number of recursions is between 1 and 20.</p>";
						}
					} else {
						echo "<p class='error'>Please ensure your values are numerical integers.</p>";
					}
				} else {
					echo "<p class='error'>Please ensure both values are filled out.</p>";
				}
			}
			?>
			<p id="references">Read More: <a href="http://tutorial.math.lamar.edu/Classes/CalcI/NewtonsMethod.aspx">Newton's Method</a></p>
		</div>
	</body>
</html>