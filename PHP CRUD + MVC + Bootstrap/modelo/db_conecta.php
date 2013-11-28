<?php
try {
	$con = new PDO('mysql:host=localhost;dbname=web_prog',
			  'root', '');
} catch (PDOException $ex) {
	echo $ex->getMessage();
	die();
}
?>
