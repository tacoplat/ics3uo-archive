<!DOCTYPE html>
<html>
<head>
	<title>User Input & Conditional Statements Lesson</title>
	<link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
	<style>
	body {
		font-family: 'Arvo', serif;
		background-image: url("https://images.pexels.com/photos/66997/pexels-photo-66997.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
		background-size: cover;
		background-attachment: cover;
		font-size: 1.1em;
		line-height: 1.5;
		color: #EDEBD7;
	}
	.error {
		color: #ff0000;
	}
	.button {
	  -webkit-border-radius: 20;
	  -moz-border-radius: 20;
	  border-radius: 20px;
	  -webkit-box-shadow: 0px 0px 5px #666666;
	  -moz-box-shadow: 0px 0px 5px #666666;
	  box-shadow: 0px 0px 5px #666666;
	  font-family: 'Arvo', serif;
	  color: #ffffff;
	  font-size: 14px;
	  background: #e0c34e;
	  padding: 5px 10px 5px 10px;
	  text-decoration: none;
	}

	.button:hover {
	  background: #cf7d19;
	  text-decoration: none;
	}
	#reportContainer {
		position: relative;
		margin-left: auto;
		margin-right: auto;
		width: 80%; 
		padding: 2%; 
		margin-top: 10px;
		background: rgba(0,0,0,0.4);
		border-radius: 0.5em; 
	}
	input {
		font-size: 0.8em; 
		padding: 2px;
		margin-top: 5px;
		margin-bottom: 5px;
		border: 2px solid #E3B23C;
	}
	</style>
</head>
<body>
	<a href="https://icsprogramming.ca/2019-2020/zhen4d333/"><img src="https://icsprogramming.ca/2019-2020/zhen4d333/images/back.png" height="100px" alt="Back to Index Page (this image is not displaying because of an error)."></a>
	<div id="reportContainer">
	
<?php
// using if statements to automatically set the grade and comment
if ($_POST['subBtn']) {
	// store the posted values from the form in variables
	$stu_name = $_POST['theName'];
	$stu_mark = $_POST['theMark'];
	
	if ($stu_name == "" OR $stu_mark == "") {
		// show error statement if fields are left empty (simple error checking)
		echo "<p class='error'>You must include a name and mark!</p>";
	} else  {	
		// conditions for displaying grade and comment
		if ($stu_mark <= 100 AND $stu_mark >= 95) {
			$letter_grade = "A+";
			$comment = "Excellent work, keep it up!";
			$special_comment = "Special comment: Wow, outstanding job, " . $stu_name . "!";
		} else if ($stu_mark <= 100 AND $stu_mark > 90) {
			$letter_grade = "A+";
			$comment = "Great work, keep it up!";
		} else if ($stu_mark == 90) {
			$letter_grade = "A";
			$comment = "Good efforts! You're doing great!";
		} else if ($stu_mark < 90 AND $stu_mark >= 80) {
			$letter_grade = "A-";
			$comment = "Good efforts.";
		} else if ($stu_mark < 80 AND $stu_mark >= 76) {
			$letter_grade = "B+";
			$comment = "Good efforts. Keep working on it!";
		} else if ($stu_mark == 75) {
			$letter_grade = "B";
			$comment = "Good job.";
		} else if ($stu_mark < 75 AND $stu_mark >= 70) {
			$letter_grade = "B-";
			$comment = "Alright, my dude. You're almost there.";
		} else if ($stu_mark < 70 AND $stu_mark >= 65) {
			$letter_grade = "C+";
			$comment = "You'll get 'em next time, bud.";
		} else if ($stu_mark == 65) {
			$letter_grade = "C";
			$comment = "Time to get those grades up!";
		} else if ($stu_mark < 65 AND $stu_mark >= 60) {
			$letter_grade = "C-";
			$comment = "Oh boy...";
		} else if ($stu_mark < 60 AND $stu_mark >= 56) {
			$letter_grade = "D+";
			$comment = "Oh boy... You may want to get a tutor at this point.";
		} else if ($stu_mark == 55) {
			$letter_grade = "D";
			$comment = "Extensive remediation required.";
		} else if ($stu_mark < 55 AND $stu_mark >= 50) {
			$letter_grade = "D-";
			$comment = "Bruh...";
		} else if ($stu_mark <= 49 AND $stu_mark >= 0) {
			$letter_grade = "Unsuccessful";
			$comment = "Bruh... What're you doing, man?";
		} else {
			$letter_grade = "<p class='error'>Invalid mark entered - must be between 0 and 100.</p>";
		}
	}
}
?>
		<h1><u>"Making the Grade!"</u></h1>
		<p>This is a mock student report.<br />
		
		<!-- add user input form here-->		
		<form action="conditional-statements-lesson-1.php" method="post">
			<!-- add user input fields  YOU MUST DO THIS FOR YOURSELF -->
			Student Name: <input type="text" name="theName" value=""><br>
			Course Mark: <input type="number" name="theMark" value=""><br>
			<input type="submit" name="subBtn" class="button">
		</form><br>
		
		Student's Name: </b> <? echo $stu_name; ?><br />
		Student's Mark: </b> <? echo $stu_mark ?><br />
		Letter Grade: </b> <? echo $letter_grade; ?><br />
		Comment: </b> <? echo $comment; ?><br />
		</b> <? echo $special_comment; ?></p>
	
</div>

</body>
</html>
