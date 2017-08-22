<?php

$db = new mysqli('127.0.0.1', 'root', 'root', 'mysqli');

$users = $db->query("SELECT * FROM users WHERE id = 1");

echo $users->fetch_object()->email;

$db->close();

echo "Anything else.";
