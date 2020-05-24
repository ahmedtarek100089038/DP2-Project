<?php
if(isset($_POST['submit'])) {
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];
$sender = 'From: ' .$mailFrom;

$txt = "You have received a new message from the user: ".$name.".\n\n".$message;

mail('craftpophousekuching@gmail.com','New Contact Us Form Submission From: ' .$mailFrom,$txt,$sender);
header("Location: contactus.php?mailsend");
}

