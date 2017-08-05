<form action = "POST.php" method = "POST">
	Please enter your password:<br>
	<input type = "password" name = "password"><br>
	<input type = "submit" value = "Submit">
</form>

<?php
//variables are going to be hidden, use GET if we need variables needed in a url, specific web addr etc

$password ='password';

if (isset($_POST['password']) && !empty($_POST['password'])) { //if you do _POST or _GET here instead, you won't get a notice, empty is used to make sure "submitted" is not there even after refreshing the page and doing nothing
	$password_post = $_POST['password']; //makes life easier
	if ($password_post == $password) {
		echo 'Correct';
	}
	else {
		echo 'Incorrect';
	}
}


?>
