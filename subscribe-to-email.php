<?php
if(isset($_POST['submit'])) {

$mailFrom = $_POST['email'];

$emailTo = "craftpophousekuching@gmail.com"; // Our email address
$email_subject = "Subscrib to our newsletter Form Submission From: ".$mailFrom;
$txt = "You have received a new message from the user ".$name.".\n\n".$message;

//Send the email
mail($emailTo,$email_subject,$txt,$email_subject);
header("Location: index.php?mailsend");
}