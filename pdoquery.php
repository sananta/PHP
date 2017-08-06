<?php

ini_set('display_errors', 'On');
$db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root','root');

//var_dump($db);
//querys are basically used to make changes to database, doesn't matter what you are doing in query, var_dump will print it
$updateUser = $db->query("
	UPDATE users
	SET last_name = 'Mad'
	WHERE id = 1
");

var_dump($updateUser);

?>
