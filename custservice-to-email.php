
<?php
if(isset($_POST['submit'])) {
	
$name = $_POST['name'];
$title = $_POST['title'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];
$sender = 'From: ' .$mailFrom;

$txt = "You have received a new customer service enquiries from the user: ".$name.".\n\n".$title."\n\n".$message;

mail('craftpophousekuching@gmail.com','New Customer Service Enquiries Submission From: ' .$mailFrom,$txt,$sender);
header("Location: customerservice.php?mailsend");
}

