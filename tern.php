<?php
$age = 16;
//$old_enough = false;
/*if ($age >= 18) {
	$old_enough = true;
}
*/

//ternary operator can shorten these previous if statements to one line
$old_enough = ($age >= 18) ? true : false; // we don't need to store old_enough = false in the beginning


/*if ($old_enough === true){
	echo 'Old enough';
}
else {
	echo 'Not old enough';
}
*/
//ternery for previous code
echo ($old_enough === true) ? 'Old enough' : 'Not old enough';



?>
