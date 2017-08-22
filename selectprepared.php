<?php

$db = new mysqli('127.0.0.1', 'root', 'root', 'mysqli');

$users = $db->prepare("SELECT email, first_name, last_name FROM users WHERE first_name = ?");

$users->bind_param('s', $_GET['first_name']);

$users->execute();

//var_dump($users);

$users->bind_result($email, $firstName, $lastName);

//$users->fetch();

//var_dump($users);

//echo $email;

while($users->fetch()) {
	echo $email, '<br>';
}

?>
