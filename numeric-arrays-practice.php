<!DOCTYPE html>
<html>
	<head>
		<title>Numeric Arrays Practice</title>
	</head>
	<body>
		<h1>Numeric Arrays</h1>
		<h2>The Paw Patrol edition!</h2>
		<img src="http://icsprogramming.ca/examples/pawpatrol1.jpg" alt="pawpatrol" title="Paw Patrol" style="width: 400px;"/>
		<?php
		// incorporating loops for the output
		$pawPatrol = array("Ryder","Marshall","Rubble","Chase","Rocky","Zuma","Skye","Everest");
		$pawPatrolPower = array("1","2","3","4","5","6","7","8");

		echo "<p>The Paw Patrol...</p>";
		echo "<p>There are <b>" . sizeof($pawPatrol) . "</b> members of the Paw Patrol.</p>";

		//$j = rand(0,8);
		//echo $pawPatrol[$j] . " [$j]";
		// use a for loop to show the values
		for ($i = 0; $i < sizeof($pawPatrol); $i++) {
			if ($pawPatrolPower[$i] > 5 ) {
		    	echo "<li>" . $pawPatrol[$i] . " [P: " . $pawPatrolPower[$i] . "]</li>";
		   	}
		}
		echo "</p>";
		?>
	</body>
</html>