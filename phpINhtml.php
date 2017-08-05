<?php
if (isset($_POST['name'])) {
	$name = $_POST['name'];
	if (!empty($name)) {
		$sentence = $name.' woke up and made a PHP tutorial';
	}
	else {
		echo 'Please enter a name.';
	}
}
?>

<html>
<head>
</head>
<body>
//<strong><?php echo 'Varshini'; /*same result if it was just Varshini without php*/ ?></strong>
<form action = "phpINhtml.php" method= "POST">
	Type your name: <br><input type = "text" name = "name" value = "<?php echo $name; ?>"><br>
	<input type = "submit" value = "Submit" >

</form>

<textarea rows= "7" cols = "25"> <?php  echo $sentence; ?> </textarea>

</body>
</html>
