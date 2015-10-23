<?php
	$firstName = $_POST["first_name"];
	$middleName = $_POST["middle_name"];
	$lastName = $_POST["last_name"];
	$gender = $_POST["gender"];
	// Birthday
	$month = $_POST["Month"];
	$day = $_POST["Day"];
	$year = $_POST["Year"];
	// Program and student type
	$program = $_POST["program"];
	$studentType = $_POST["student_type"];
	$address = $_POST["address"];
?>

First Name: <strong><?php echo $firstName; ?></strong><br />
Middle Name: <strong><?php echo $middleName; ?></strong><br />
Last Name: <strong><?php echo $lastName; ?></strong><br />
Gender: <strong><?php echo $gender; ?></strong><br />
Birthday: <strong><?php echo $month . " " .  $day . ", " . $year; ?></strong><br />
Program: <strong><?php echo $program; ?></strong><br />
Student Type: <strong><?php echo $studentType; ?></strong><br />
Address: <pre><?php echo $address; ?></pre><br />

