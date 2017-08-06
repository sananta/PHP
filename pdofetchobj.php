<?php

ini_set('display_errors', 'On');

class User
{
	public function getFullName()
	{
		return "{$this->first_name} {$this->last_name}";
	}
}

$db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', 'root');

$users = $db->query("
	SELECT * FROM users
");

$users->setFetchMode(PDO::FETCH_CLASS, 'User'); //if we wanted to output users full name or edit the created date
//$users = $users->fetch();

//echo '<pre>', var_dump($users->email),'</pre>';

while ($user = $users->fetch()) {
	//echo $user->email.'<br>';
	echo $user->getFullName(), '<br>';
}

?>
