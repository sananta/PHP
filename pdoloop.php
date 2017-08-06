<?php

ini_set('display_errors', 'On');
$db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', 'root');
$users = $db->query("
	SELECT * FROM users
");

/* while ($user = $users->fetchObject()) {
	echo $user->email, '<br>'; //prints the emails of both users on database
}
*/

while ($user = $users->fetch(PDO::FETCH_ASSOC)) { /* we can also do fetchObject()->email and then echo $user with a break */
	//echo '<pre>', var_dump($user), '</pre>';
	echo $user['email'].'<br>'; //prints out Varshini and Hemadri emails
}

die();

?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>PDO</title>
	</head>
	<body>
		<?php while($user = $users->fetchObject()): ?>
			<div class = "user">
				<h4><?php echo $user->first_name; ?></h4>
				<p><?php echo $user->email; ?></p>
			</div>
		<?php endwhile; ?>
	</body>
</html>
