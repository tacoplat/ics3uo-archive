<!DOCTYPE html>
   
<html lang="en">
<head>
	<title>Introduction to PHP</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link href="https://fonts.googleapis.com/css?family=Chilanka&display=swap" rel="stylesheet">
	<style type="text/css">
	body {
		font-family:'Chilanka', cursive;
		font-size: 1.0em;
		color: #ffffff;
		/* cool css3 background from: http://lea.verou.me/css3patterns/ */
		background:
		linear-gradient(27deg, #151515 5px, transparent 5px) 0 5px,
		linear-gradient(207deg, #151515 5px, transparent 5px) 10px 0px,
		linear-gradient(27deg, #222 5px, transparent 5px) 0px 10px,
		linear-gradient(207deg, #222 5px, transparent 5px) 10px 5px,
		linear-gradient(90deg, #1b1b1b 10px, transparent 10px),
		linear-gradient(#1d1d1d 25%, #1a1a1a 25%, #1a1a1a 50%, transparent 50%, transparent 75%, #242424 75%, #242424);
		background-color: #131313;
		background-size: 20px 20px;
                          padding: 20px;
	}
	.fancyInput {
		border: 1px solid #398f50;
		outline: none;
		font-size: 1.5em;
	}
	.fancyInput:hover {
		border: 1px solid #398f50;
	}	
	h1, h2 {
		color: #398f50;
	}
	.subButton {
		font-size: 1.2em;
		border: 1px solid #398f50;
		padding: 5px;
	}
	.subButton:hover {
		border: 1px solid #398f50;
		cursor: pointer;
		color: #398f50;
	}	
	p.output {
		padding: 10px;
		margin: 10px;
		background: #398f50;
		font-size: 1.2em;
	}
	</style>
</head>
<body>
<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)." style="background-color: lightgrey; border-radius: .5em;"></a>
<?
	echo "<h2>What is PHP?</h2>
	<p><b>PHP</b> (recursive acronym for <b>P</b>HP: <b>H</b>ypertext <b>P</b>reprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML.</p>";
?>

<h2>Simple Form Validation with PHP</h2>

<?
	/* the if statement below makes the code inside of it
	only show up if the button in the form named 'submitBtn' is clicked.
	You can have multiple submit buttons, but they must have different names.*/
	if ($_POST['submitBtn1']) {
		// set the variables...
		$theName = $_POST['theName'];
		$socksColour = $_POST['socksColour'];
		$email = $_POST['email'];
		$shoebrand = $_POST['shoeBrand'];
		$os = $_POST['os'];
		
		// print out the message
		echo "<p class='output'>The name that was entered into the form was: <b style='background: #f1c40f;'>" . $theName . "</b><br />
		The colour socks chosen was: <b style='background: #f1c40f;'>" . $socksColour . "</b><br>Your email is: <b style='background: #f1c40f;'>" . $email . "</b><br>You chose: <b style='background: #f1c40f;'>" . $shoebrand . " shoes</b><br>The operating system chosen was: <b style='background: #f1c40f;'>" . $os . "</b><br></p>";
	}
?>

 <h2>The Form</h2>
 <p>Complete the form below and press submit.  Notice how the values are now output (echoed) to the page based and the <b>variable name</b> assigned in the form.</p>
<h3>Form Attributes</h3>
 <ul>
	<li> "name" is the unique name of the form</li>
	<li> "get" method shows the variables and values in the address bar of your browser</li>
	<li> "post" method hides the type variables and values - the information is posted to the server</li>
	<li> "action" is the URL that the form will direct to once the submit button is pressed</li>
</ul>

<form name="form1" action="introduction-to-php.php" method="post">
	<b>Name:</b><br />
	<input type="text" name="theName" value="" class="fancyInput"></input><br />
	<b>Colour of Socks:</b><br />
	<select name="socksColour" class="fancyInput">
		<option value=""></option>
		<option value="blue">Blue Socks</option>
		<option value="green">Green Socks</option>
		<option value="red">Red Socks</option>
	</select><br />
	<b>Email:</b><br>
	<input type="email" name="email" value="" class="fancyInput" placeholder="example@example.com"></input><br />
	<b>Brand of shoe:</b><br />
	<select name="shoeBrand" class="fancyInput">
		<option value=""></option>
		<option value="Nike">Nike</option>
		<option value="Adidas">Adidas</option>
		<option value="Reebok">Reebok</option>
		<option value="Asics">Asics</option>
	</select><br>
	<b>Operating system:</b><br>
	<input type="radio" name="os" value="Mac OS">Mac OS</input><br>
	<input type="radio" name="os" value="Windows">Windows</input><br>
	<input type="radio" name="os" value="Linux-based OS">Linux-based</input><br>
	<input type="submit" value="SUBMIT" name="submitBtn1" class="subButton"></input>
</form>
</body>
</html>