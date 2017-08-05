<?php
   /* $names = 'Alex(21), Billy(16), Dale(49)'; //printed exactly how it is w/o quotes
    echo $names;
    
    $different = array('Alex', 'Billy', 'Dale');
    echo $different; //nothing happens just prints keyword "Array"
    echo '<br>';
    print_r ($different); //prints keys/index pointed to value of array
    echo '<br>';
    echo $different[0];//prints Alex, if out of bounds, we get no output
    
    //we can also create keys
    echo '<br>';
    $different = array('Alex'=>21, 'Billy'=>16, 'Dale'=>49);
    print_r ($different);
    echo '<br>';
    echo $different['Dale'];//prints Dale's age because his name is now a key
    $different['Josh'] = 18; //now you added a Josh key with a value 18 to the array
    $different['Alex'] = 22; //now the Alex key is equal to this new value 22
    //You can declare arrays all together or individually as well like above
    echo '<br>';
    print_r ($different);
    
    //Multi-Dimensional Arrays, arrays in arrays
    
    $different = array(
    'Alex'=>array('Age'=>21, 'Hair'=>'Blonde', 'Food'=>array('Pizza', 'Pasta')),
    'Billy'=>array('Age'=>16, 'Hair'=> 'Brown'),
    'Dale'=>array('Age'=>49, 'Hair' => 'Blonde'));
    echo '<br>';
    echo $different['Dale']['Age']; //put the next key, if its just 'Dale' it just prints 'Array'
    //print_r ($different);
    echo '<br>';
    print_r ($different['Alex']['Food']); //prints the keys pointing to values 'Pizza' and 'Pasta'
    echo '<br>';
    echo $different['Alex']['Food'][0]; //'Pizza', without 0 prints just the word Array
	*/

	//ARRAYS PT. 1
	$levels = array(
		1 => 'Level 1',
		2 => 'Level 2',
		3 => 'Level 3'
	);
	//var_dump($levels); gives you info about any variable
	//print_r ($levels); keys pointing to values
	$GLOBALS['alright']= array( //three dimensional global array
		1 => array('name' => 'Level 1', 'desc' => 'This is the first level'),
		2 => array('name' => 'Level 2', 'desc' => 'You\'ve made it to level 2'),
		3 => array('Level 3' => 'Level 3', 'desc' => 'The last level', 'points' => array(1=>1000))
	);
	//print_r ($alright);

	//echo $alright[3]['points'][1];

	//$alright[4] = array('name' => 'Level 4', 'desc' => "Level 4");
	//$alright[4]['name'] = 'Level 4';
	//echo $GLOBALS['alright'][2]['desc'];

	function level_data($level, $data) {
		if (array_key_exists($level,$GLOBALS['alright']) === true) {
			return $GLOBALS['alright'][$level][$data];
		}
		else {
			return false;
		}
	}
	//echo level_data(1, 'desc'); //var_dump on this can determine if it goes into if statement


	echo '<pre>', print_r($GLOBALS, true), '</pre>';
    
?>
