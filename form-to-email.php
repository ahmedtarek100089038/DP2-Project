<?php
if(isset($_POST['submit'])) {
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];
$sender = 'From: ' .$mailFrom;
$info = 'From: Craft Pop House.';
$sendertxt = "We had received your message. Our team will be replying you very soon. Stay tunes and thank you.\n\n".$info;

$txt = "You have received a new message from the user: ".$name.".\n\n".$message;

//Admin Receive
mail('craftpophousekuching@gmail.com','New Contact Us Form Submission From: ' .$mailFrom,$txt,$sender);

//Sender Receive
mail($mailFrom,'Thank you for sending us message!',$sendertxt,$sender);
header("Location: contactus.php?mailsend");
}

