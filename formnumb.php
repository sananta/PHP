<?php
$num = 25123; //can even be in the millions doesnt work on decimals though
echo 'I have &pound',$num; //&pound is the pound symbol
//how to put a comma in a $num
echo '<br>'.number_format($num); //adds a comma

//for decimals you can do
$num = 25123567.1234567;
echo '<br>I have &pound;', number_format($num, 3);//includes three decimal places to the right
echo '<br>', $num; //experimentation: I can use a comma instead of a dot to append variables like $num
echo '<br>I have &pound;', number_format($num, 3, ' ', ','); //two additional parameters that control dot and comma resp. prints space instead of where dot is
?>
