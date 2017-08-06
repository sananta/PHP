<?php

ini_set('display_errors', 'On');

try {
	$db = new PDO('mysql:host=127.0.0.1;dbname=123', 'root', 'root');
}catch(PDOException $e) {
	//die('Site is down.');
	var_dump($e->getMessage());
}


//throw new PDOException();

