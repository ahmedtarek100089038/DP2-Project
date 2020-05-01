<?php
if(isset($_POST['submit'])) {

$name = $_POST['name'];
$phone = $_POST['phone'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$emailTo = "craftpophousekuching@gmail.com"; // Our email address
$email_subject = "New Contact Us Form Submission From: ".$mailFrom;
$txt = "You have received a new message from the user ".$name.".\n\n".$message;

//Send the email
mail($emailTo,$email_subject,$txt,$email_subject);
header("Location: contactus.php?mailsend");
}