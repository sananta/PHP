<?php

$names = array('Varshini', 'Alex', 'Billy');

//echo implode(', ', $names);

$names_str = null;

foreach($names as $key => $name) {
	$names_str .= $name;
	if($key != (count($names) - 1)) {
		$names_str .= ', ';
	}
}

//echo $names_str;

//different example, collect and process data

$name = 'Varshini';
$email = 'sananta@ucdavis.edu';
$message = 'Cool';
$telephone = '012345678';

$data = array(
	'name' => $name,
	'email' => $email,
	'message' => $message,
	'telephone' => $telephone
);

//print_r($data);
$fields_sql = '`'.implode('`, `', array_keys($data)).'`'; //without array_keys we would get values instead
//die($fields_sql);
$values_sql = '\''.implode('\', \'', $data).'\'';

$sql = "
	INSERT INTO `table` ($fields_sql)
	VALUES($values_sql)
";

echo $sql;

		

?>
