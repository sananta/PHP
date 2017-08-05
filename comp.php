<?php
    //==
    //!= or <>
    //>
    //<
    //>=
    //<=
    
    $name = 'Varshini';
    $age = 19;
    
    if ($name == 'Varshini') {
        echo 'OK.';
    }
    else {
        echo "NOT OK.";
    }
    
    echo '<br>';
    
    if ($age <> 19) {
        echo "TRUE";
    }
    else {
        echo "NOT OK";
    }
    
    $age = 21;
    $status = false;
    
    echo '<br>';
    
    if ($age >=21) {
        $status = true;
    }
    
    echo '<br>';
    
    if ($status == true) {
        echo 'You\'re allowed.';
    }
    else if ($status == false) {
        echo 'Sorry, not allowed';
    }
    
    echo '<br>';
    //triple equals
    
    $num = 10;
    $num2 = '10';
    
    if ($num > 50) {
        echo 'Greater than 50';
    }
    else {
        echo 'Not greater than 50';
    }
    
    echo '<br>';
    
    if ($num == $num2) { //prints this even though two different data types
        echo 'equal';
    }
    else {
        echo 'not equal';
    }
    
    echo '<br>';
    
    if ($num === $num2) { //data type taken into account
        echo 'equal';
    }
    else{
        echo 'not equal';
    }
    
    echo '<br>';
    //logical operators
    
    //1. Number entered
    //2. Upper limit 100
    //3. Lower Limit 1
    //4. Between 1 and 100.
    
    $num = 100.1;
    
    //OR and ||
    //AND and &&
    //! is NOT
    
    if ($num>=1 && $num<=100 ) {
        echo 'Number is fine';
    }
    else {
        echo 'Number must be between 1 and 100, inclusive'; //prints this
    }
    
    echo '<br>';
    
    $name = 'Charan';
    $age = 20;
    
    if (($name == 'Varshini' || $name == 'Hemadri' || $name == 'Charan') && $age == 21) { //&& not making sense, name has to equal all 3, in current Charan case WITHOUT brackets around name we get go away, if Hemadri or Varshini we get greetings
        echo 'greetings';
    }
    else {
        echo 'go away';
    }
    
    echo '<br>';
    
    if ($name == 'Varshini' && ($age == 19 || $age == 20)) {
        echo "ALRIGHT";
    }
    
?>
