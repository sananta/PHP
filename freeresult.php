<?php

$db = new mysqli('127.0.0.1', 'root', 'root', 'mysqli');

$users = $db->query("SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name, first_name, last_name FROM users");

//var_dump($users);

echo $users->fetch_object()->email;

$users->free();

?>

