<?php

ini_set('display_errors', 'On');

$db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', 'root');

$users = $db->query("
	SELECT * FROM users
");

$users = $users->fetchAll(PDO::FETCH_OBJ);
//echo '<pre>',var_dump($users),'</pre>'; empty fetchAll prints empty FETCH_BOTH arrays for both users

/* foreach($users as $user) {
	echo $user->email.'<br>'; }*/
?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>PDO</title>
	</head>
	<body>
		<?php foreach ($users as $user): ?>
			<div class = 'user'>
					<h4><?php echo $user->first_name; ?></h4>
					<p><?php echo $user->email; ?> </p>
			</div>
		<?php endforeach; ?>
	</body>
</html>
