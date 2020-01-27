<?php session_start();?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>SpeedyShip | Delivery Solutions & Services</title>
		<meta charset="utf-8">
		<meta name="Author" content="Andy Zhen">
		<meta name="Description" content="Performance Task #1. Using User Input/Output to create a parcel delivery service with email confirmation.">
		<meta name="Notice" content="This page is not optimized for mobile screens. Some links on this page lead nowhere.">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		<link href="/2019-2020/zhen4d333/images/favicon.png" rel="shortcut icon">
		<style type="text/css">
			html {
				font-family: 'Open Sans', sans-serif;
				color: #1E1B18;
				padding: 0;
			}
			body {
				padding: 0;
				margin: 0;
			}
			#navbar {
			  overflow: hidden;
			  background-color: #0A2463;
			  padding-top: 14px;
			  padding-bottom: 14px;
			}
			#navbar a {
			  float: left;
			  display: block;
			  color: #FFFAFF;
			  text-align: center;
			  padding: 14px;
			  text-decoration: none;
			}
			.right {
			  float: right !important;
			  margin-right: 16px;
			  display: block;
			  color: #FFFAFF;
			  text-align: center;
			  padding: 14px;
			  text-decoration: none;
			}
			#navbar a:hover {
				background-color: #364B7F;
			}
			.logoheader {
				margin-left: 18px;
				margin-right: 18px;
				padding: 4px !important;
			}
			.logoheader:hover {
				background-color: #0A2463 !important;
			}
			.content {
			  padding: 16px;
			}
			.sticky {
			  position: fixed;
			  padding-top: 2px !important;
			  padding-bottom: 2px !important;
			  top: 0;
			  width: 100%;
			}
			.sticky + .content {
			  padding-top: 60px;
			}
			#centermessage {
				text-align: center;
				padding: 20px;
				padding-top: 80px;
				padding-bottom: 80px;
				margin: 0;
				background: rgba(255, 255, 255, 0.6);
				font-size: 69px;
			}
			#bkgdcenter {
				background: url(/2019-2020/zhen4d333/images/carrier.jpg) no-repeat center center fixed; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
			}
			#bkgdcenter h1 {
				opacity: 1.0 !important;
			}
			#formdesc {
				width: 75%;
			}
			.under {
				background-color: #FFD1A3;
				padding-top: 16px;
				padding-left: 26px;
				padding-bottom: 12px;
				overflow: none;
			}
			.under h2, h3 {
				color: #19233A;
			}
			#introsect {
				background-image: 
			}
			.inputspace {
				margin-top: 5px;
				margin-bottom: 15px;
				margin-left: 4px;
			}
			.inputstyle {
				border: 1px solid #0A2463;
				font-size: 14px;
				padding: 4px;
			}
			#commentarea {
				width: 280px;
			}
			.dimension {
				width: 45px;
			}
			#costcriteria {
				position: fixed;
				display: none;
				bottom: 0px;
				right: 8px;
				max-height: 800px;
				width: 320px;
				background-color: white;
				padding-left: 22px;
				overflow: auto;
				border-top-left-radius: 0.4em;
				border-top-right-radius: 0.4em;
				border: 1px solid grey;
			}
			#costcriteria h2{
				line-height: 1;
			}
			.minimize {
				height: 44px;
				width: 44px;
				padding: 0;
				display: inline-block;
				float: right;
				background-color: red;
				color: white;
				text-align: center;
				font-size: 24px;
			}
			#closebutton {
				color: white;
				background-color: inherit;
				text-align: center;
				font-size: 24px;
				border: none;
				width: 100%;
				height: 100%;
			}
			#costcriteria table, td {
				border-collapse: collapse;
				font-size: 12px;
			}
			.tablehead {
				font-weight: bold;
				color: #C8CDDC;
			}
			#taxinfo {
				font-size: 12px;
				width: 80%;
			}
			.lightblue {
				background-color: #B5BDD0;
			}
			.blue {
				background-color: #233051;
			}
			.button {
				background-color: #28375D;
				color: #DADEE7;
				font-size: 14px;
				padding: 10px;
				border-radius: 0.7em;
				margin-top: 18px;
				margin-bottom: 18px;
			}
			.button:hover {
				background-color: #364B7F
				;
				color: #DADEE7;
				font-size: 14px;
				padding: 10px;
				border-radius: 0.7em;
				margin-top: 18px;
				margin-bottom: 18px;
			}
			#selectedlink, #selectedlink:hover {
				background-color: #285D82 !important;	
			}
			.error {
				color: red;
			}
			.errormsg {
				margin-left: 12px;
			}
			.results {
				background-color: #FFD1A3;
				padding-top: 16px;
				padding-left: 26px;
				padding-bottom: 12px;
				overflow: none;
			}
			.results h2, h3 {
				color: #19233A;
				margin-bottom: 4px;
			}
			.celldiv {
				display: table-cell;
				width: 42%;
			}
			.total {
				color: #19233A;
				font-size: 26px;
				margin-right: 4px;
			}
			.dropdown {
				position: relative;
				display: inline-block;
			}
			.dropdown:hover .navlink{
				background-color: #285D82 !important;
			}
			.sticky .dropdown-content {
				display: none;
				position: fixed;
				top: 52px;
				z-index: 1;
				overflow: auto;
			}
			.dropdown-content {
				display: none;
				position: fixed;
				top: 64px;
				z-index: 1;
				overflow: auto;
				min-width: 180px;
				border-right: outset 4px #E8E4E8;
			}
			.dropdown-content a {
				font-size: 12px;
				padding: 3px;
				width: 180px;
			}
			.dropdown:hover .dropdown-content {
				display: block;
				background-color: #497693;
			}
			.end {
				border-bottom: outset 4px #E8E4E8;
			}
		</style>
	</head>
	<body>
		<div id="navbar">
			<a href="/2019-2020/zhen4d333/" class="logoheader"><img style="height: 42px;vertical-align: middle;" src="/2019-2020/zhen4d333/images/SpeedyShip.png"></a>
			<div class="dropdown">
				<a href="#" id="selectedlink" class="navlink">Shipping  ⥥ </a>
					<div class="dropdown-content">
						<a href="https://icsprogramming.ca/2019-2020/zhen4d333/parcel-delivery-service.php">Shipping Cost Estimator</a><br>
						<a href="#locations">Office Locations</a><br>
						<a href="#postagepackaging" class="end">Postage and Packaging</a>
					</div>
			</div>
			<div class="dropdown">
				<a href="#tracking" class="navlink">Tracking  ⥥ </a>
					<div class="dropdown-content">
						<a href="#missing">Missing a Package?</a><br>
						<a href="#tracker" class="end">Track an Order</a>
					</div>
			</div>
			<div class="dropdown">
				<a href="#services" class="navlink">Services & Solutions  ⥥ </a>
					<div class="dropdown-content">
						<a href="#business">Business Solutions</a><br>
						<a href="#express">X-Press Ship</a><br>
						<a href="#global">Global Shipping</a><br>
						<a href="#cargo" class="end">SpeedyShip Cargo</a><br>
					</div>
			</div>
			<a href="#account" class="right"><img src="/2019-2020/zhen4d333/images/accticon.png" style="height: 24px;vertical-align: middle;margin-right: 8px;">   Log In or Create Account</a>
		</div>
		<div class="content" id="bkgdcenter">
			<div>
				<h1 id="centermessage">Greetings from SpeedyShip!</h1>
			</div>
		</div>
		<?php
			function volumeCost($length, $width, $height){
				global $volumeCost;	
				$volume = number_format(($length * $width * $height), 2);
				$volumeCost = $volume * 0.00025;
				if($volumeCost <= 15){
					$volumeCost = 15;
				}
				$volumeCost = number_format($volumeCost, 2);
			}
			function massCost($mass){
				global $massCost;
				if($mass > 0 and $mass < 2){
					$massCost = 2;
				} elseif($mass >= 2 and $mass < 5) {
					$massCost = 5;
				} elseif($mass >= 5 and $mass < 10) {
					$massCost = 10;
				} elseif($mass >= 10 and $mass <= 50) {
					$massCost = $mass * 1.5;
				}
				$massCost = number_format($massCost, 2);
			}
			function distanceCost($distance){
				global $distanceCost;
				if($distance > 0 and $distance < 10) {
					$distanceCost = 5;
				} elseif($distance >= 10 and $distance < 50) {
					$distanceCost = 14.50;
				} elseif($distance >= 50 and $distance <= 100) {
					$distanceCost = 21.75;
				}
				$distanceCost = number_format($distanceCost, 2);
			}
			function salesTax($volumeCost, $massCost, $distanceCost){
				global $subTotal;
				global $salesTax;
				global $total;
				$subTotal = number_format(($volumeCost + $massCost + $distanceCost), 2);
				$salesTax = number_format(($subTotal * 0.13), 2);
				$total = number_format(($subTotal + $salesTax), 2);
			}
			if($_POST['orderPlace']){
				$fname = $_SESSION['fname'];
				$lname = $_SESSION['lname'];
				$email = $_SESSION['email'];
				$phone = $_SESSION['phone'];
				$length = $_SESSION['length'];
				$width = $_SESSION['width'];
				$height = $_SESSION['height'];
				$mass = $_SESSION['mass'];
				$distance = $_SESSION['distance'];
				$comments = $_SESSION['comments'];
				$subTotal = $_SESSION['subTotal'];
				$total = $_SESSION['total'];

				$to = "1zhenand@hdsb.ca";
				$from = $fname . " " . $lname . " <" . $email . ">";
				$subject = "Parcel Service Order - " . $fname . $lname;
				$message = "New parcel service order from " . $fname . $lname . " (" . $phone . ").<br>Package dimensions: " . $length . "cm x " . $width . "cm x " . $height . "cm<br>Package mass: " . $mass . "kg<br>Shipping distance: " . $distance . "km<br>Subtotal: $" . $subTotal . "<br>Total: $" . $total . "<br>Comments: " . $comments . ".";
				$confirmSubj = "Order Confirmation - SpeedyShip";
				$confirmMsg = "Your SpeedyShip order request has been confirmed. Thank you for your patronage. Your package will arrive within 7 business days.";
					$separator = md5(time());
			        $eol = PHP_EOL;    

			        $headers  = "From: ".$from.$eol;
			        $headers .= "MIME-Version: 1.0".$eol; 
			        $headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"".$eol; 
			        $headers .= "Content-Transfer-Encoding: 7bit".$eol;
			        $headers .= "This is a MIME encoded message.".$eol;

			        $body = "--".$separator.$eol;
			        $body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
			        $body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
			        $body .= $message.$eol;

			    mail($to,$subject,$body,$headers);
			    mail($email,$confirmSubj,$confirmMsg,$headers);

			    echo "<h2 style='margin-left: 15px;'>Thank you. Your order has been sent.</h2>";

			   	$vars = array_keys(get_defined_vars());
				foreach($vars as $var) {
				    unset(${"$var"});
				}

			    session_destroy();
			}
			if($_POST['back']){
				$fname = $_SESSION['fname'];
				$lname = $_SESSION['lname'];
				$email = $_SESSION['email'];
				$phone = $_SESSION['phone'];
				$length = $_SESSION['length'];
				$width = $_SESSION['width'];
				$height = $_SESSION['height'];
				$mass = $_SESSION['mass'];
				$distance = $_SESSION['distance'];
				$comments = $_SESSION['comments'];
			}
			if($_POST['subBtn']){
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$email = $_POST['email'];
				$phone = $_POST['phone'];
				$length = $_POST['length'];
				$width = $_POST['width'];
				$height = $_POST['height'];
				$mass = $_POST['mass'];
				$distance = $_POST['distance'];
				$comments = $_POST['comments'];
				if(!empty($length) and !empty($width) and !empty($height) and !empty($fname) and !empty($lname) and !empty($email) and !empty($phone) and !empty($mass) and !empty($distance)) {
					if(filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL)){
						if(is_numeric($phone) and strlen($phone) == 10) {
							if(is_numeric($length) and is_numeric($width) and is_numeric($height) and is_numeric($mass) and is_numeric($distance)) {
								if($length > 0 and $width > 0 and $height > 0){
									if($length <= 200 and $width <= 200 and $height <= 200){
										if($mass > 0 and $mass <= 50) {
											if($distance > 0 and $distance <= 100) {
												$hidecalc = true;
												volumeCost($length, $width, $height);
												massCost($mass);
												distanceCost($distance);
												salesTax($volumeCost, $massCost, $distanceCost);
												echo "<div class='results'>
												<h2>Hello " . strtoupper($fname) . ",</h2>
												<div class='celldiv'>
													<p><u>Here are your personal details:</u><br>
													<b>E-mail</b>: " . $email . "<br>
													<b>Phone Number</b>: " . $phone . "</p>
													<p><u>Here are the details of your package:</u><br>
													<b>Package Dimensions</b>: " . $length . "<b>cm</b> x " . $width . "<b>cm</b> x " . $height . "<b>cm</b><br>
													<b>Package Weight</b>: " . $mass . "kg<br>
													<b>Shipping Distance</b>: " . $distance . "km</p>";
												if(!empty($comments)) {
													echo "<p><u>Your Comments:</u><br>
													" . $comments . "</p>";
												}
												echo "</div>";
												echo "<div class='celldiv'>
												<p><u>Here is the cost breakdown for your package.</u><br>
												Volume Cost: $" . $volumeCost . "<br>
												Mass Cost: $" . $massCost . "<br>
												Distance Cost: $" . $distanceCost . "<br><br>
												Subtotal: $" . $subTotal . "<br>
												Sales Tax: $" . $salesTax . "<br><br>
												<span class='total'>TOTAL</span> $" . $total . "</p>";
												echo "</div><div class='celldiv'>
												<form name='placeorder' action='parcel-delivery-service.php' method='post'>
												<input type='submit' name='orderPlace' class='button' value='Place Order'>
												<input type='submit' name='back' class='button' value='Go Back'>
												</form>";
												echo "</div></div>";
												$_SESSION['fname'] = $fname;
												$_SESSION['lname'] = $lname;
												$_SESSION['email'] = $email;
												$_SESSION['phone'] = $phone;
												$_SESSION['length'] = $length;
												$_SESSION['width'] = $width;
												$_SESSION['height'] = $height;
												$_SESSION['mass'] = $mass;
												$_SESSION['distance'] = $distance;
												$_SESSION['comments'] = $comments;
												$_SESSION['subTotal'] = $subTotal;
												$_SESSION['total'] = $total;
											} else {
												echo "<p class='error errormsg'>Shipping distance cannot be negative/zero or exceed 100km.</p>";
											}
										} else {
											echo "<p class='error errormsg'>Package weight must be between 0kg and 50kg.</p>";
										}
									} else {
										echo "<p class='error errormsg'>Package dimensions must be less than 200cm.</p>";
									}
								} else {
									echo "<p class='error errormsg'>Package dimensions must be greater than 0cm.</p>";
								}
							} else {
								echo "<p class='error errormsg'>Please enter numerical values for dimensions, mass and shipping distance.</p>";
							}
						} else {
							echo "<p class='error errormsg'>Please enter a valid phone number, in the format of 1234567890.</p>";
						}
					} else {
						echo "<p class='error errormsg'>Please enter a valid email address, in the format of example@example.com.</p>";
					}
				} else {
					echo "<p class='error errormsg'>Please fill out all required fields.</p>";
				}
			}
		?>
		<div class="under" <?if($hidecalc == true){echo "style='display:none;'";} ?>>
			<h2>Shipping Cost Calculator</h2>
			<p id="formdesc">Have a package to deliver? No problem, we've got you covered.<br>Use this shipping cost calculator to get an accurate estimate on all package costs based on package weight and dimensions.<br>With our service, packages must be less than or equal to <b><u>200cm</u></b> in any given linear dimension.<br>Package weight cannot exceed <b><u>50kg</u></b>, and we will ship up to <b><u>100km</u></b> away.</p>
			<form name="parcel" action="parcel-delivery-service.php" method="post">
				<h3>Client Information</h3>
				<label for="fname">First Name: <span class="error">*</span></label>
				<input type="text" name="fname" class="inputspace inputstyle" value=<?echo $fname;?>><br>
				<label for="lname">Last Name: <span class="error">*</span></label>
				<input type="text" name="lname" class="inputspace inputstyle" value=<?echo $lname;?>><br>
				<label for="email">E-mail Address: <span class="error">*</span></label>
				<input type="text" name="email" class="inputspace inputstyle" style="width: 220px;" value=<?echo $email;?>><br>
				<label for="phone">Phone Number: <span class="error">*</span></label>
				<input type="text" name="phone" class="inputspace inputstyle" value=<?echo $phone;?>><br>
				<h3>Package Information</h3>
				<label for="length">Length (cm): <span class="error">*</span></label>
				<input type="text" name="length" class="inputspace inputstyle dimension" value=<?echo $length;?>> x 
				<label for="length">Width (cm): <span class="error">*</span></label>
				<input type="text" name="width" class="inputspace inputstyle dimension" value=<?echo $width;?>> x 
				<label for="length">Height (cm): <span class="error">*</span></label>
				<input type="text" name="height" class="inputspace inputstyle dimension" value=<?echo $height;?>><br>
				<label for="mass">Mass (kg): <span class="error">*</span></label>
				<input type="text" name="mass" class="inputspace inputstyle dimension" value=<?echo $mass;?>><br>
				<label for="distance">Shipping Distance (km): <span class="error">*</span></label>
				<input type="text" name="distance" class="inputspace inputstyle" value=<?echo $distance;?>><br>
				<label for="comments" style="vertical-align: top;">Comments: </label>
				<textarea name="comments" rows="6" class="inputspace inputstyle" id="commentarea"><?echo $comments;?></textarea><br>
				<input type="submit" name="subBtn" class="button" value="Submit Estimate">
				<input type="button" name="showBtn" class="button" onclick="showCriteria()" value="Show Cost Breakdown">
			</form>
			<div id="costcriteria">
				<div class="minimize">
					<button id="closebutton" onclick="hideCriteria()">-</button>
				</div>
				<h2>Cost Breakdown</h2>
				<table border="1" cellpadding="4">
					<tr>
						<td colspan="2" class="tablehead blue">Volume-based Costs</td>
					</tr>
					<tr>
						<td class="lightblue">Minimum cost</td>
						<td class="lightblue">$15.00</td>
					</tr>
					<tr>
						<td class="lightblue">Cost per cm‎³</td>
						<td class="lightblue">$0.00025</td>
					</tr>
				</table><br>
				<table border="1" cellpadding="4">
					<tr>
						<td colspan="2" class="tablehead blue">Mass-based Costs</td>
					</tr>
					<tr>
						<td class="lightblue">0kg - 2kg</td>
						<td class="lightblue">$2.00</td>
					</tr>
					<tr>
						<td class="lightblue">2kg - 5kg</td>
						<td class="lightblue">$5.00</td>
					</tr>
					<tr>
						<td class="lightblue">5kg - 10kg</td>
						<td class="lightblue">$10.00</td>
					</tr>
					<tr>
						<td class="lightblue">10kg +</td>
						<td class="lightblue">$1.50 per kg</td>
					</tr>
				</table><br>
				<table border="1" cellpadding="4">
					<tr>
						<td colspan="3" class="tablehead blue">Zone-based Costs</td>
					</tr>
					<tr>
						<td class="lightblue">Zone 1</td>
						<td class="lightblue">0km - 10km</td>
						<td class="lightblue">$5.00</td>
					</tr>
					<tr>
						<td class="lightblue">Zone 2</td>
						<td class="lightblue">10km - 50km</td>
						<td class="lightblue">$14.50</td>
					</tr>
					<tr>
						<td class="lightblue">Zone 3</td>
						<td class="lightblue">50km - 100km</td>
						<td class="lightblue">$21.75</td>
					</tr>
				</table>
				<p id="taxinfo">There is an additional sales tax of 13% after other applicable fees.</p>
			</div>
		</div>
		<script>
			window.onscroll = function() {myFunction()};
			var navbar = document.getElementById("navbar");
			var sticky = navbar.offsetTop;
			function myFunction() {
			  if (window.pageYOffset > sticky) {
			    navbar.classList.add("sticky");
			  } else {
			    navbar.classList.remove("sticky");
			  }
			}
			var overlay = document.getElementById("costcriteria");
			function hideCriteria() {
				if (overlay.style.display = "inline-block") {
					overlay.style.display = "none";
				}
			}
			function showCriteria() {
				if (overlay.style.display = "none") {
					overlay.style.display = "inline-block";
				}
			}
		</script>
	</body>
</html>