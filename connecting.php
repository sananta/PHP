<?php
//what to do when website goes down, what to tell users

/*require_once('db.php'); to automatically copy this onto a file called db.php */
$db = new mysqli('127.0.0.1', 'root', 'root', 'abc');

/*echo '<pre>', var_dump($db), '</pre>'; can do this without having to view page source */

if ($db->connect_errno === 0) { /* if the errno is 0, we know its working */
	die('Everything is working.');
}

else {
	die('We are down at the moment, try again soon.');
}
