<?php
//Create credentials for connection_aborted

$db_host = 'localhost';
$db_name = 'quiz';
$db_user = 'root';
$db_pass = '';

//Create mysqli object

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);


//Error Handler

if($mysqli->connect_error) {
	printf("Connection failed: %s\n", $mysqli->connect_error);
	exit();
}
?>
