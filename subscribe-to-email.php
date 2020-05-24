<?php
if(isset($_POST['submit'])) {

$mailFrom = $_POST['email'];
$sender = 'From: ' .$mailFrom;

$txt = "You have received a new subscription from the user ".$mailFrom;

mail('craftpophousekuching@gmail.com','New Customer Subscription From: ' .$mailFrom,$txt,$sender);
header("Location: index.php?mailsend");
}



