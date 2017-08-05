<?php
//similar to cookies but not stored for long period of time like cookies
session_start(); //need this
//$_SESSION['name'] = 'Varshini';
echo $_SESSION['name']; // can be accessed from any other folder as well

//how to unset sessions in two different ways
unset($_SESSION['name']);
session_destroy(); //destroys all current sessions present

?>
