<?php
//cookies is set of data stored on users computer by web server, all your details for specific website stored in cookies, 'remember me' stuff, cookies stored for later use

$exp = time() + 86400; //unix timestamp is the amount of second before January 1 12 AM in 1970, expires in 1 day = 86400 seconds
$exp_unset = time() - 86400;
setcookie("name", "Varshini", $exp);

//setcookie("age", 19, $exp );

//echo $_COOKIE["name"].' is '.$_COOKIE["age"]; //cookie stored for one whole day even if you comment out previous code
print_r($_COOKIE);

//unset cookie
setcookie("name", "", $exp_unset);

//check if cookie is set
if (isset($_COOKIE['name'])) {
	echo 'Cookie is set';
}
else {
	echo 'Cookie is not set';
}
?>
