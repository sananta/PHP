<?php

$password = 'password';
$age = 21;

if ($password == 'varshini'){
    echo 'This is the correct password';
}
else {
    echo 'This is the wrong password';
}

if($age >= 21)
    {
        echo '<br>You\'re old enough to drink in the USA';
        
    }
else if ($age>=18) {
    echo '<br>You\'re old enough to drinkn in the UK';
}
else {
    echo '<br>You\re not old enough to drink in the USA or the UK.';
}

//switch
echo '<br>';
    
$num = 1;
    
switch($num) {
    case 10:
        echo "Ten";
    break;
    case 9:
        echo "Nine";
    break;
    case 8:
        echo "Eight";
    break;
    default:
        echo "Number is not recognized";
    break;
            
}
    
echo '<br>';

$num = 'Ten';

switch($num) {
    case 'Ten':
        echo "10"; // You can also do $num = 10, changing types as well
    break;
    case 'Nine':
        echo "9";
    break;
    case 'Eight':
        echo "8";
    break;
    default:
        echo "Number is not recognized";
    break;
        
}

echo '<br>';
    
echo $num; //if $num changed to integer, prints integer

//switch equivalent to if with three or's
echo '<br>';
    
$name = 'Dale';
    
switch($name) {
    case 'Alex':
    case 'Billy':
    case 'Josh':
        echo 'Hello there.'; //works for all three names
    break;
    default:
        echo 'Go away'; //if name not equivalent to other three
    break;
}
?>
