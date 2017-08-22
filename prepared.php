<?php

$db = new mysqli('127.0.0.1', 'root', 'root', 'mysqli');

if (!empty($_POST)) {
	$email = $_POST['email'];
	$firstName = $_POST['first_name'];
	$lastName= $_POST['last_name'];

	$prepared = $db->prepare("
		INSERT INTO users (email, first_name, last_name, created)
		VALUES(?, ?, ?, NOW())
	");
	
	$prepared->bind_param('sss', $email, $firstName, $lastName);
	
	$prepared->execute();
}

?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="UTF-8">
		<title>MySQLi</title>
	</head>
	<body>
		<form action = "prepared.php" method = "post" autocomplete = "off">
			<input type = "text" name="email" placeholder = "Email">
			<input type = "text" name="first_name" placeholder = "First Name">
			<input type = "text" name="last_name" placeholder = "Last Name">
			<input type = "submit" value = "Sign Up">
		</form>
	</body>
</html>
