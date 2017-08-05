<?php

if (isset($_POST['language'])) { //isset helps avoid nasty errors
	//echo "Is Set.";
	$language = $_POST['language'];//with post you can't see what language ='s to in url bar
	echo 'You selected '.$language;
}

?>
