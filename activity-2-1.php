<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">	
	<title>PHP Basics: Syntax</title>
	<meta name="description" content="Introduction to PHP Syntax.">
	<meta name="author" content="Andy Zhen">	
	<link rel="shortcut icon" href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/emoji-one/44/personal-computer_1f4bb.png">
	<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
	<style>
		body {
			background-color: #c2bfff;
			padding: 15px;
			font-size: 1.0em;
			font-family: 'Rubik', sans-serif;
			color: #222222;
		}
		.container {
			background-color: #F7F4EA;
			padding: 10px;
			border-radius: 0.4em;
			-webkit-box-shadow: 2px 3px 4px #666666;
			-moz-box-shadow: 2px 3px 4px #666666;
			box-shadow: 2px 3px 4px #666666;
			opacity: 0.8;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>PHP Basics: Syntax</h1>
		<?php
		//This is my first PHP document
		echo "<p>This is my first PHP document.  The text in this paragraph was displayed using the echo command.  This is pretty cool.</p>";
		echo "<p>This sentence would not " . "be complete unless I learn how to properly " . "append strings.</p>";
		?>
	</div>
	<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
</body>
</html>