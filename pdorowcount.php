<?php

ini_set('display_erors', 'On');

$db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', 'root');

$users = $db->query("SELECT count(id) AS count FROM users"); //stores as object with AS

echo $users->fetchObject()->count;

/* you could also do 
$users = $users->fetchObject(); 
echo $users->count; 
*/

$pc = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', 'root');
$nameQuery = $pc->query("SELECT * FROM users");

$name = $nameQuery->fetchAll(PDO::FETCH_OBJ);
//echo '<br>',var_dump($name);

//echo $nameQuery->rowCount();

/*

foreach ($name as $names) {
	echo '<br>',$names->email;
}
*/

?>

<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8">
		<title>PDO</title>
	</head>
	<body>
		<p> There are <?php echo $nameQuery->rowCount(); ?> registered users </p>
		<?php foreach ($name as $names): ?>
			<?php echo $names->email,'<br>'; ?>
		<?php endforeach; ?>
	</body>
</html>
