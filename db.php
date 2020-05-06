<?php

require "constants.php";

$servername = "localhost";
$username = "root";
$password = "";
$db = "craftpophouse_db";

//Create Connection
$con = mysql_connect($servername, $username, $password, $db);

// Check Connection
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}

?>