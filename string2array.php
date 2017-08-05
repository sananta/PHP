<?php

$likes = 'eating, drinking, the gym, nothing';
$likes = explode(',', $likes); //separate the string $likes by commas

//print_r($likes);
foreach($likes as $key => $like) {
	//echo $like, ' at position ', $key, '<br>';
	echo '<a href="#">', $like, '</a><br>';
}

?>
