<?php

ini_set('display_errors', 'On');

class User
{

	protected $dates = ['created', 'last_seen',]; //if we were to add the last_seen property


	public function __construct() /*construct is always called when an object is made */
	{
		//var_dump($this->created);
		//$this->created = 'never';
		//$this->created= new DateTime($this->created);
		foreach($this->dates as $date) {
			$property = $this->{$date};
			$this->{$date} = new DateTime($property);
		}
	}

	public function getFullName()
	{
		return "{$this->first_name} {$this->last_name}";
	}

	public function getRegisteredDate()
	{
		return $this->created->format('d M Y h:i:s');
	}
}

$db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', 'root');

$users = $db->query("SELECT * FROM users");

$users->setFetchMode(PDO::FETCH_CLASS, 'User');

//echo '<pre>',var_dump($users->fetch()),'</pre>';
//die();

/*while($user = $users->fetch()) {
	echo $user->getFullName(),'<br>';
}*/

?>
<!DOCTYPE html>
<html lang= "en">
	<head>
		<meta charset="UTF-8">
		<title>PDO</title>
	</head>
	<body>
		<?php while ($user = $users->fetch()): ?>
			<div class = "user">
				<h4><?php echo $user->getFullName(); ?></h4>
				<p> Registered on <?php echo $user->getRegisteredDate(); ?></p> /* created is now an object not just a string or integer, so we can't just echo it out, so we add format(), you can also try getTimestamp() instead of format() */
			</div>
		<?php endwhile; ?>
	</body>
</html>
