<?php
//functions speeds up code
function name($name) {
     echo 'My name is '.$name; //nothing happens if echo was renamed "return"
}

name('Varshini');
    
//if you want to do something with return
function introduce($name, $age) {
    return'My name is '.$name.' and my age is '.$age;
}
    
$returnvalue = introduce('Alex', 20);
echo '<br>'.$returnvalue;
    
function add($num1, $num2) {
    $result = $num1 + $num2;
    return $result;
}

echo '<br>'.add(10, 30);
    
//functions with undefined parameters
function plus($num1, $num2, $num3) {
    $total = $num1 +$num2 + $num3;
    return $total;
}
    
//echo '<br>'.plus(10, 5); this would give an error
    
//so to fix this
function plus1() {
	$total = 0;
	//print_r(func_get_args()); prints arguments along with their key value
	foreach(func_get_args() as $arg) { //func_get_args() represents the array
		$total += (int)$arg;
	}
	return $total;
}

echo '<br>'.plus1('5', 10, 1);//we can put any number of numbers we want in here

//echo user_data('firstname', 'lastname', 'dob') used for finding these data in user row and then stored into a query

//different example
function append($initial) {
	//$result = ' ';
	$result = func_get_arg(0); //this would print Alex James Garret rather than just James Garret
	//return func_get_arg(0);this would return just Alex
	foreach (func_get_args() as $key=>$value) {
		//'<br>'.echo $key;
 		if ($key >= 1) {
			$result .= ' '.$value; //.= is same as += except its used for appending
		}
	}
	return $result;
}
echo '<br>'.append('Alex', 'James', 'Garret');
?>
