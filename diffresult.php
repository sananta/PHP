<?php

$db = new mysqli('127.0.0.1', 'root', 'root', 'mysqli');

$users = $db->query("SELECT email, created, CONCAT(first_name, ' ', last_name) as full_name, first_name, last_name FROM users");

//$users = $users->fetch_assoc();

//$users = $users->fetch_object();

//echo '<pre>', var_dump($users), '</pre>';

//echo $users->email;

//adding a new element
//$users->age = 25;

//echo '<pre>',var_dump($users),'</pre>'; /*now adds in a new element called age */

//while ($rows = $users->fetch_object()) {
	//echo '<pre>', var_dump($rows),'</pre>';
	//echo $rows->email, '<br>'; }

$users = $users->fetch_array();

echo $users['email'];
echo $users[0]; //same as the one above, using fetch_array()

//echo '<pre>',var_dump($users),'</pre>'; /*prints both assoc and indexed arr*/
