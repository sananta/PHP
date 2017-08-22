<?php

$db = new mysqli('127.0.0.1', 'root', 'root', 'mysqli');

/*$updateUser = $db->query("UPDATE users SET last_name = 'Smith'");


echo "{$db->affected_rows} rows were updated.";

$insert = $db->query("
	INSERT INTO users (email, first_name, last_name, created)
	VALUES('hello@codecourse.com', 'Hello', 'Ananta', NOW())
");
*/

if (!empty($_POST)) {
	//var_dump($_POST);
	$email = $db->real_escape_string($_POST['email']); //escaping, real part is not necessary
	$firstName = $db->real_escape_string($_POST['first_name']);
	$lastName = $db->real_escape_string($_POST['last_name']);
	$insert = $db->query("
		INSERT INTO users(email, first_name, last_name, created)
		VALUES ('{$email}', '{$firstName}', '{$lastName}', NOW())
	");
}



?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>MySQLi</title>
	</head>
	<body>
		<form action = "updating.php" method= "post" autocomplete = "off">
			<input type = "text" name = "email" placeholder = "Email" >
			<input type = "text" name = "first_name" placeholder = "First Name" >
			<input type = "text" name = "last_name" placeholder = "Last Name" >
			<input type = "submit" value = "Sign Up">
		</form>
