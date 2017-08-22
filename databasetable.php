<?php

$db = new mysqli('127.0.0.1', 'root', 'root', 'mysqli');

//$user = $db->query("SELECT * FROM users WHERE id = 2");

//$user = $user->fetch_assoc();

//var_dump($user);
/* echo $user['email']; will print hemadris email */

//$user = $db->query("SELECT * FROM users"); //you could also do specific like email

//var_dump($user);

/* while ($row = $user->fetch_assoc()) {
	//echo 'Hi'; 2 times
	echo '<pre>',var_dump($row),'</pre>'; } */

$user = $db->query("SELECT email, created, CONCAT(first_name,' ', last_name) as full_name FROM users");

?>


<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>MySQLi</title>
	</head>
	<body>
		<?php while($row=$user->fetch_assoc()): ?>
			<p> <?php echo $row['full_name']; ?>, <?php echo $row['email']; ?>, <?php echo $row['created']; ?> </p>
		<?php endwhile; ?>
	</body>
</html>
