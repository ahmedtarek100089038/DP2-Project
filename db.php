<?php

require "config/constants.php";

$servername = HOST;
$username = USER;
$password = PASSWORD;
$db = DATABASE_NAME;

//Create Connection
$con = mysql_connect($servername, $username, $password, $db);

// Check Connection
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}

?>