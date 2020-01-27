<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Activity 2.4c - Contact Form</title>
		<meta name="author" content="Andy Zhen">
		<meta name="description" content="A simple contact form created with PHP, with simple user validation and email output.">
		<link rel="shortcut icon" href="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/21/outbox-tray_1f4e4.png">
		<link href="https://fonts.googleapis.com/css?family=Slabo+27px&display=swap" rel="stylesheet">
		<style>
			html {
			  background: url(https://images.unsplash.com/photo-1513151233558-d860c5398176?ixlib=rb-1.2.1&w=1000&q=80) no-repeat center center fixed; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;
			  font-family: 'Slabo 27px', serif;
			  color: #e0dede;
			  font-size: 80%;
			  line-height: 80%;
			}
			.content {
				background-color: #4B5267;
				width: 50%;
				margin: auto;
				padding: 15px;
				text-align: center;
				font-size: 1.6em;
				opacity: 0.95;
			}
			label {
			  display:inline-block;
			  vertical-align:central;
			  margin-right: 10px;
			  margin-top: 30px;
			}
			textarea{
			  display:inline-block;
			  vertical-align:middle;
			  margin-right: 10px;
			  margin-top: 30px;
			}
			.input {
				padding: 8px;
				width: 200px;
				background-color: #768799;
				color: white;
				border: 1px solid white;
			}
			::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
			  color: #dfe5eb;
			  opacity: 1; /* Firefox */
			}

			:-ms-input-placeholder { /* Internet Explorer 10-11 */
			  color: #dfe5eb;
			}

			::-ms-input-placeholder { /* Microsoft Edge */
			  color: #dfe5eb;
			}
			.submit {
				margin-top: 30px;
				margin-bottom: 10px;
				background-color: #6096cc;
				padding: 10px;
				font-size: 18px;
				font-family: 'Slabo 27px', serif;
				color: white;
				border-radius: 1em;
			}
			.submit:hover {
				background-color: #1a3754;
				color: #55697d;
			}
			p.output {
				color: #32876c;
			}
			p.error {
				color: #ba2609;
			}
		</style>
	</head>
	<body>
		<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
		<div class="content">
			<h1>Contact Me!</h1>
			<hr width="80%">
			<?php
			// only send the e-mail if the submit button has been clicked.
			if ($_POST['submitBtn']) {
			      // get the users passcode
			      $password = $_POST['passwordx'];

			      // simple safety check	
			      if ($password == "icssecure") {
			            $to = "1zhenand@hdsb.ca"; // to: email address
			            $from = $_POST['full_namex'] . " <" . $_POST['emailx'] . ">"; // from: Name <email>
			            $subject = $_POST['subjectx']; // from form
			            $message = $_POST['messagex']; // from form
			            $confsubject = "Submission Confirmation - ICS Contact Form";
			            $confmessage = "The message you sent through the contact form on Andy's ICS website has been submitted. Thank you for providing your feedback.";

			            if(!empty($_POST['full_namex']) and !empty($_POST['subjectx']) and !empty($_POST['emailx']) and !empty($_POST['messagex']) and !empty($_POST['passwordx'])) {
			            	 
			            	 // create headers - leave this alone
			            //**********************************
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

			                  if (filter_var(($_POST['emailx']), FILTER_VALIDATE_EMAIL)) {
			                  mail($to,$subject,$body,$headers);
			                  mail($_POST['emailx'],$confsubject,$confmessage,$headers);
			             	 } else {
			             	 	echo "<p class='error'>You have entered an invalid email.</p>";
			             	 }
			                  //*******************************
			            // end of headers, body, and send
			                  if ($_SERVER['REQUEST_METHOD'] == 'POST' and filter_var(($_POST['emailx']), FILTER_VALIDATE_EMAIL)) {
									echo "<p class='output'>Thank you, the e-mail was sent to " . $to . ".</p>";
								}
			                  } else {
			                  	echo "<p class='error'>Sorry, please ensure all the fields are filled out.</p>";
						     }
					} else {
					 echo "<p class='error'>Sorry, your captcha secure code was not correct.</p>";
				}
			}
			?>
			<form action="contact-form.php" name="contactForm" method="post" <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' and filter_var(($_POST['emailx']), FILTER_VALIDATE_EMAIL) and !empty($_POST['full_namex']) and !empty($_POST['subjectx']) and !empty($_POST['emailx']) and !empty($_POST['messagex']) and !empty($_POST['passwordx'])){ echo 'style="display:none;"'; } ?>>
				<label for="full_namex">Full Name:</label>
				<input type="text" name="full_namex" placeholder="Your name here" class="input" value="<?php echo $_POST['full_namex']; ?>"><br>
				<label for="emailx">E-mail:</label>
				<input type="text" name="emailx" placeholder="example@example.com" class="input" value="<?php echo $_POST['emailx']; ?>"><br>
				<label for="subjectx">Subject:</label>
				<input type="text" name="subjectx" placeholder="Message subject" class="input" value="<?php echo $_POST['subjectx']; ?>"><br>
				<label for="messagex">Message:</label>
				<textarea name="messagex" rows="5" cols="30" class="input" placeholder="Your message."><?php echo $_POST['messagex']; ?></textarea><br>
				<label for="passwordx">Passcode:</label>
				<input type="password" name="passwordx" class="input" value="<?php echo $_POST['passwordx']; ?>"><br>
				<input type="submit" name="submitBtn" value="Submit" class="submit">
		</div>
	</body>
</html>