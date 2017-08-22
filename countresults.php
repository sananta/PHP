<?php
$db = new mysqli('127.0.0.1', 'root', 'root', 'mysqli');
$user = $db->query("SELECT email, created, CONCAT(first_name,' ', last_name) as full_name, first_name, last_name FROM users");

$hello = $db->query("SELECT COUNT(id) as count FROM users");

$hi = $hello->fetch_object();

echo $hi->count;

//$counter = $db->query("SELECT SQL_CALC_FOUND_ROWS id FROM users");
$countResult = $db->query("SELECT FOUND_ROWS() as counter"); //faster

var_dump($countResult->fetch_object());

?>

<!DOCTYPE html>
<html lang = "en">
        <head>
                <meta charset = "UTF-8">
                <title>MySQLi</title>
        </head>
        <body>
			<p>We currently have <?php echo $user->num_rows; ?> registered users.</p>
			<?php while ($row = $user->fetch_object()): ?>
				<div class = "user">
					<h3><?php echo $row->email;?></h3>
					<p><?php echo $row->full_name; ?></p>
				</div>
			<?php endwhile; ?>
		</body>
</html>
