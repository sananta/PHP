//we can use form action to ask the webpage to ask us variables itself
//"name" needs to match 'name' in GET.php
//"name" needs to match 'age' and made smaller with size =5
//basically for action puts the variables with values in the url for us
<form action = "GET.php" method = "GET">
	Name:<br><input type = "text" name = "name"><br>
	Age:<br><input type = "text" name = "age" size = "5"><br>
	<input type = "submit" value="Submit">
</form>



<?php
//in webpages if you add ?name=Varshini to the end of the url, you defined a variable called Name as Varshini and passing on that data, ampersand symbol "&" can be used to add more variables
//we're gonna be using $_GET to ask user for name and age and then displayed back to them

$name = $_GET['name']; //if $name was NULL, then isset($name) would evaluate to false
$age = $_GET['age'];
if (isset($name)&&isset($age)) {
	if (!empty($name)&&!empty($age)) { //we need this nested in or else when we first come to page "Please type something will appear" bc if is false
		echo 'I am '.$name.' and I am '.$age.' years old.'; //then define name and age variables in url
	}
	else {
		echo 'Please type something.';
	}
} //if !isset($name)&&isset($age) nothing happens because this is the end of the block
?>

//$_GET array has its disadvantages because it only processes limited number of user data, 5000 word essay would lead to truncation of data in some sites
