<?php
/* $string = " blue   car ";
$keywords = explode(' ', $string); //string to array, mess with diff amount og spaces though

print_r($keywords);

*/

//solution
$string = trim('Blue    car    sales');
$keywords = preg_split('/[\s]+/', $string); //now you can split string with unlimited amount of spaces
print_r($keywords); //prints an array without spaces
?>

