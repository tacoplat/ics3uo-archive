
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Text-based Adventure Game</title>	
	
	<meta name="description" content="Text-based Adventure Game using PHP">
	<meta name="author" content="Acton High School">	
	
	<!-- styles - internal (not linked) -->
	<style>
		body {
			padding: 20px 20px 20px 20px;
			background-color: #ececec; 
			color: #333333;
			font-family: "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
		}
	</style>

</head>
<body>
	<h1>CYOA Text-based Game: Simple</h1>
	<p>Choose wisely!</p>
	
<?
	$option = $_GET['option'];
	
	if ($option == "") {
		echo "<p>You are standing in a dark room with 2 doors.  One to the left and one to the right.  You must make a choice.
		<br /><a href='text-based-cyoa-example.php?option=1'>LEFT DOOR</a> | <a href='text-based-cyoa-example.php?option=2'>RIGHT DOOR</a>
		</p>";
	} else if ($option == "1") {
		echo "<p>You chose the left door.  Very wise.  The door shuts behind you and locks.  You are standing in another room.  There are two tunnels leading out of the room.<br />
		<a href='text-based-cyoa-example.php?option=3'>LEFT TUNNEL</a> | <a href='text-based-cyoa-example.php?option=4'>RIGHT TUNNEL</a>
		</p>";
	} else if ($option == "2") {
		echo "<p>You have parished. Sorry.<br /><a href='text-based-cyoa-example.php'>START AGAIN</a></p>";
	} else if ($option == "3") {
		echo "<p>You have parished. Sorry.<br /><a href='text-based-cyoa-example.php'>START AGAIN</a></p>";
	} else if ($option == "4") {
		echo "<p>You have parished. Sorry.<br /><a href='text-based-cyoa-example.php'>START AGAIN</a></p>";
	} else {
		echo "<p>You have made an invalid selection!</p>";                
            }
?>
	
</body>
</html>
