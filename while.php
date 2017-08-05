<?php
    
$num = 10;
while ($num >= 0) {
    echo '<br>'.$num.'<br>'; //concatenating and looping example
    $num--;
}

echo $num;

//another way
while ($num >= 0) :
    echo '<br>'.$num.'<br>'; //concatenating and looping example
    $num--;
endwhile;
    
/*do-while loops, checks condition at the end of the statement, block always runs first time*/

$num = 1;

do {
    echo '<br>This<br>';
}while($num != 1); //'This' would be printed once, if more than one do we need a semicolon here

do {
    echo $num.'<br>'; //if $num++ and echo were switched, once 10 is reached, 11 would print, 2 instead of 1
    $num++;
}while($num <= 10)
    
    
?>
