<?php
    for($num=1;$num<=10; $num++) { //you can also reverse by $num-- and other adjustments
        echo $num.'<br>';
    }
    
    /* foreach to iterate through arrays */
    $num = 0;
    $names = array('Alex', 'Billy', 'Dale');
    
    foreach($names as $value) {
        $num++;
        echo 'Name '.$num.' is '.$value.'<br>'; // if you switch these two statements make sure $num init. to 1
    }
    
    $names = array('Alex'=>21, 'Billy'=>16, 'Dale'=>14);
    
    foreach($names as $value){
        echo $value.'<br>';//prints 21, 16, 14
    }
    
    foreach($names as $key => $value) {
        if ($key != 'Alex') {
            echo $key.' is '.$value.'<br>';
        }
    }
?>
