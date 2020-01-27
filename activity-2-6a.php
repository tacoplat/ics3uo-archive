<?
session_start();
echo $_SESSION['outputs'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="author" content="Andy Zhen">
	<meta name="description" content="Output Name, Age, Career with PHP Functions.">
	<title>Activity 2.6a - Introduction to Functions</title>
	<link rel="shortcut icon" href="https://emojis.wiki/emoji-pics/apple/man-artist-apple.png">
	<link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
	<style type="text/css">
		html {
			font-family: 'Cabin', sans-serif;
			background-color: #FF5E5B;
			padding: 20px;
		}
		.content {
			background-color: #FFFFEA;
			padding: 20px;
			border-radius: 0.6em;
		}
		.orange {
			color: orange;
		}
		.green {
			color: green;
		}
		input {
			margin-bottom: 20px;
			font-size: 14px;
		}
		.submit {
			margin-top: 10px;
			margin-right: 10px;
			background-color: #00CECB;
			color: black;
			padding: 5px 15px;
			font-size: 14px;
			border-radius: 0.9em;
			font-family: 'Cabin', sans-serif;
		}
		.submit:hover {
			margin-top: 10px;
			margin-right: 10px;
			background-color: #008482;
			color: white;
			padding: 5px 15px;
			font-size: 14px;
			border-radius: 0.9em;
			font-family: 'Cabin', sans-serif;
		}
	</style>
</head>
<body>
	<?
		if($_POST['reset']){
			$name == "";
			$age = 0;
			$career == "";
			session_destroy();
		}
	?>
	<div class="content">
		<h1><u>Introduction to PHP Functions</u></h1>
		<h2>Name, Age, Career</h2>
		<?
			function nameAgeCareer($name,$age,$career){
				echo "<p><u>" . $name . "</u> is <u>" . $age . " years old</u> and is <u>" . $career . "</u>.</p>";
			}
			nameAgeCareer("Andy Zhen", 16, "a McDonald's crew member");
			nameAgeCareer("Charlotte Zhen", 24, "some kind of corporate-level manager at Walmart");
			nameAgeCareer("Frederick Frederick", 66, "a carpenter");
			nameAgeCareer("Jeff Bezos", 55, "the CEO of Amazon");
		?>
		<h2>The Function</h2>
		<p><span class="green">nameAgeCareer</span>(<span class="orange">$name,$age,$career</span>);</p>
		<p>This function requires three parameters: the person's name, their age, and their occupation.</p>
		<p>It outputs the base statement: "_____ is _____ years old and is _______________."</p>
		<h2>Try it out!</h2>
		<form name="nameAgeCareer" method="post" action="activity-2-6a.php">
			<label for="name">Name: </label>
			<input type="text" name="name" placeholder="John Appleseed"><br>
			<label for="age">Age: </label>
			<input type="number" name="age" placeholder="32"><br>
			<label for="career">Career: </label>
			<input type="text" name="career" placeholder="a forester"><br>
			<input type="submit" name="subBtn" class="submit">
			<input type="submit" name="reset" value="Reset" class="submit"><br>
		</form>
		<?
			$name = $_POST['name'];
			$age = $_POST['age'];
			$career = $_POST['career'];

			if($_POST['subBtn']) {
				$outputs .= nameAgeCareer($name, $age, $career);
				$_SESSION['outputs'] = $outputs;
			}

			echo $_SESSION['outputs'];
		?>
	</div>
	<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
</body>
</html>