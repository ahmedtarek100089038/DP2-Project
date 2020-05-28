<?php


$servername = "localhost";
$username = "root";
$password = "";
$db = "craftpophouse_db";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Now we check if the data was submitted, isset() function will check if the data exists.
if (!isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password'], $_POST['repassword'], $_POST['mobile'], $_POST['address1'])) {
	// Could not get the data that should have been sent.
	exit('Please complete the registration form!');
}

if(empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['repassword']) || empty($_POST['mobile']) || empty($_POST['address1'])){
	// One or more values are empty.
	exit('Please complete the registration form');
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	exit('Email is not valid!');
}

if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
	exit('Password must be between 5 and 20 characters long!');
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	exit('Email is not valid!');
}

if (preg_match('/[A-Za-z0-9]+/', $_POST['email']) == 0) {
    exit('email is not valid!');
}

if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
	exit('Password must be between 5 and 20 characters long!');
}

// We need to check if the account with that username exists.
if ($stmt = $con->prepare('SELECT user_id, password FROM user_info WHERE email = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result so we can check if the account exists in the database.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo "<script>
				alert('Email exists, please choose another!');
				window.location.href='register.php';
			</script>";
	} else {
		// Username doesnt exists, insert new account
		if ($stmt = $con->prepare('INSERT INTO user_info (first_name, last_name, email, password, mobile, address1) VALUES (?, ?, ?, ?, ?, ?)')) {
			// We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$uniqid = uniqid();
			$stmt->bind_param('ssssss', $_POST['first_name'],  $_POST['last_name'], $_POST['email'], $password, $_POST['mobile'], $_POST['address1']);
			$stmt->execute();
			header('Location: login.php');
		} else {
			// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
			echo 'Could not prepare statement!';
		}
	}
	$stmt->close();
} else {
	// Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
	echo 'Could not prepare statement!';
}
$con->close();


?>

<?php
if(isset($_POST['submit'])) {
	
$name = $_POST['first_name'];
$mailFrom = $_POST['email'];
$sender = 'From: ' .$mailFrom;
$info = 'From: Craft Pop House.';
$sendertxt = "We had received your registration. Thank you for choosing Craft Pop House.\n\n".$info;

$txt = "A new account registration from the user: ".$name;

//Admin Receive
mail('craftpophousekuching@gmail.com','New Account Registration From: ' .$mailFrom,$txt,$sender);

//Sender Receive
mail($mailFrom,'Thank you for your registration!',$sendertxt,$sender);
}
		
?>		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		