<?php

ini_set('display_errors', 'On');
$db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', 'root');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //3 error modes silent, warning, exception

try{
	$db->query("INVALID");
} catch(PDOException $e) {
	//die('Something went wrong');
	var_dump($e->getMessage());
}
