<?php

ini_set('display_errors', 'On');

$db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', 'root');

if (!empty($_GET['user'])) {
	echo $userID = $db->quote($_GET['user']); //escapes if a character that can cause sqlinjection(error/attack on database), returns correctly if its a number for which a user exists
	//die();
	$user = $db->query("SELECT * FROM users WHERE id = {$userID}");
	var_dump($user->fetchObject());
}

//The above code will print whichever user the internet person chooses to on the url, based on their id


