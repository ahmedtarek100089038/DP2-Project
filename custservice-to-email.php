
<?php
if(isset($_POST['submit'])) {
	
$name = $_POST['name'];
$title = $_POST['title'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];
$sender = 'From: ' .$mailFrom;
$info = 'From: Craft Pop House.';
$sendertxt = "Dear, ".$name." we had received your enquiries. We will proceed for your " .$title. " soon. Stay tunes and thank you.\n\n".$info;

$txt = "You have received a new customer service enquiries from the user: ".$name.".\n\n".$title."\n\n".$message;

//CraftPopHouse Receive
mail('craftpophousekuching@gmail.com','New Customer Service Enquiries Submission From: ' .$mailFrom,$txt,$sender);

//Sender Receive
mail($mailFrom,'Your Customer Service Enquiries Had Been Sent!',$sendertxt,$sender);
header("Location: customerservice.php?mailsend");
}



