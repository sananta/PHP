<?php
//code for registering a new user

ini_set('display_errors', 'On');

$db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', 'root');

if (!empty($_POST)) {
	$email = $_POST['email'];
	$firstName = $_POST['first_name'];
	$lastName = $_POST['last_name'];

	$user = $db->prepare("
		INSERT INTO users (email, first_name, last_name)
		VALUES (:email, :first_name, :last_name)
	");
	
	$user->execute([
		'email' => $email,
		'first_name' => $firstName,
		'last_name' => $lastName
	]);
	
	var_dump($db->lastInsertId()); //get the last inserted id, it would print as string with number in it, to get integer use casting with (int) and dump the variable assigned to
	die();
}

?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset="UTF-8">
		<title>PDO</title>
	</head>
	<body>
		<form action="pdoinserting.php" method="post" autocomplete = "off">
			<input type = "text" name = "email" placeholder = "Email">
			<input type = "text" name = "first_name" placeholder = "First Name">
			<input type = "text" name = "last_name" placeholder = "Last Name">
			<input type = "submit" value = "Register">
		</form>
	</body>
</html>
