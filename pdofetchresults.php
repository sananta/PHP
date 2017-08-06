<?php
	ini_set('display_errors', 'On');
	$db = new PDO('mysql:host=127.0.0.1;dbname=pdo', 'root', 'root');

	//you can even do * to select everything
	$users = $db->query("
		SELECT * FROM users
    ");
	echo '<pre>',var_dump($users->fetch()), '</pre>'; /* fetch returns all the selected data id and email, echo with pre creates a nice formatted list but we can even see a nice array without using it by viewing page source */
	echo '<br>';
	echo '<pre>',var_dump($users->fetch(PDO::FETCH_ASSOC)), '</pre>'; /*FETCH_ASSOC prints half of the full array with the labels as keys FETCH_NUM will give you numeric keys and FETCH_BOTH is default there is also FETCH_OBJ which gives you objects with properties rather than keys, for FETCH_OBJ you can also do users->fetchObject() */

	echo '<br>';
	echo '<pre>',var_dump($users->fetchObject()->email), '</pre>'; /*with fetchObject() you can go directly to a property that you defined the query for */
	echo '<pre>',var_dump($users->fetch(PDO::FETCH_ASSOC['email'])), '</pre>'; //same as previous echo

	//you can also do
	$users = $users->fetch(PDO::FETCH_ASSOC);
	echo $users['email'];

	/* Addressing the problem that we only get first users data on the first echo call, when we selected all, reason is because we need to loop over and iterate over these results */
	echo '<pre>',var_dump($users->fetchAll()), '</pre>'; /*prints separate arrays for both users */
	echo '<pre>',var_dump($users->fetchAll(PDO::FETCH_ASSOC)), '</pre>';
