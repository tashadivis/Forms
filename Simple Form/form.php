<!DOCTYPE html>
<html>
	<head>
		<title>Form Submission</title>
	</head>
	<body>
	<?php
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$contact = $_POST['contact'];
	
	date_default_timezone_set("Canada/Pacific");
	
	echo "<h1>Thank you!</h1>";
	echo "<p>Your info was submitted at " . date("h:ia") . "</p><br />";
	
	echo "<h3>Your Submission:</h3>";
	echo "<p>Name: " . $name . "</p>";
	echo "<p>Email: " . $email . "</p>";
	echo "<p>Message: " . $message . "</p><br />";
	
	if (isset($contact) && $contact=="yes") 
		echo "<b>You will be contacted in a week for your input. :)</b>";
	if (isset($contact) && $contact=="no") 
		echo "<b>Your input will remain anonymous. ;)</b>";
	?>
	</body>
</html>
