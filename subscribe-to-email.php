<?php
if(isset($_POST['submit'])) {

$mailFrom = $_POST['email'];
$sender = 'From: ' .$mailFrom;
$info = 'From: Craft Pop House.';
$sendertxt = "We had received your subscription. More updates will be coming soon. Stay tunes and thank you.\n\n".$info;

$txt = "You have received a new subscription from the user ".$mailFrom;

//Admin Receive
mail('craftpophousekuching@gmail.com','New Customer Subscription From: ' .$mailFrom,$txt,$sender);

//Sender Receive
mail($mailFrom,'Thank you for your subscription!',$sendertxt,$sender);
header("Location: index.php?mailsend");
}



