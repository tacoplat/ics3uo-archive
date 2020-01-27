<?php
// make the associative arrays
// the car type is the "key"
// and the cost is the "value"
$cars['Tesla'] = "90000";
$cars['BMW'] = "70000";
$cars['Ferrari'] = "150000";
$cars['Lexus'] = "80000";

// or another way to make an associative array
$trucks = array("F150"=>"50000", "Silverado"=>"60000");

// use the arrays to display the information
echo "<h2>Basic Output - using the key...</h2>";
echo "A Tesla costs " . $cars['Tesla'] . ".<br />";
echo "A F50 costs " . $trucks['F150'] . ".<br />";

// display with print_r()
echo "<h2>Display cars using print_r() function...</h2>";
print_r($cars);

echo "<h2>Display trucks using print_r() function...</h2>";
print_r($trucks);

// the cool thing is that you
// can use a foreach loop to go
// through associative arrays
echo "<h2>Output using foreach</h2>";
//arsort($cars); // sorts ascending based on value
//krsort($cars); // sorts descending based on key
foreach ($cars as $cartype => $cost) {
	//if ($cost > 50000 AND $cost < 100000) {
		echo "<p>" . $cartype . " and cost $" . $cost . "</p>";
	//}
}
?>
