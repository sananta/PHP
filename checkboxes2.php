<?php //code sent from checkboex
if (isset($_POST['agree']) && $_POST['agree'] == 'true') {
	echo 'Set and correct value.';
}
else {
	echo 'You must agree to the terms and conditions';
}
?>
