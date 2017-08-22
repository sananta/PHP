<?php

ini_set('display_errors', 'On');

$db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', 'root');

if (!empty($_GET['user'])) {
	$user = $db->prepare("SELECT * FROM users WHERE id = :user_id AND first_name = :first_name"); //instead of having to bind values to question marks in url

	$user->execute([
		'user_id' => $_GET['user'],
		'first_name' => $_GET['name']
	]);

	var_dump($user->fetchObject());

}
