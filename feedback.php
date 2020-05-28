<?php 
ob_start(); 
require 'config.php';

$view = $_POST['view'];
$name = $_POST['name'];
$comments = $_POST['comments'];
$email = $_POST['email'];
$num = $_POST['num'];


$query = mysqli_query($con, "INSERT INTO `poll`(`id`, `name`, `email`, `phone`, `feedback`, `suggestions`) VALUES ('','$name','$email','$num','$view','$comments')");
echo '<script>alert("Thank You..! Your Feedback is Valuable to Us"); location.replace(document.referrer);</script>';



/*$query1 = "SELECT * FROM `staff` WHERE email = '$email' AND password = '$password'";
$result_query1 = mysqli_query($conn, $query1);
$count_query1 = mysqli_num_rows($result_query1);
/*if ($count_query1 != 0) 
	{
    header("Location: controller/staff.php");
	exit();
	} 
else {
		    $query2 = "SELECT * FROM `admin` WHERE email = '$email' AND password = '$password'";
			$result_query2 = mysqli_query($conn, $query2);
			$count_query2 = mysqli_num_rows($result_query2);
			$count_query2 = mysqli_num_rows($result_query2);
			if ($count_query2!=0) 
			{
		   		header("Location: controller/admin.php");
				exit();
		   	} 		
		   	else
		   	 {
		   	 	echo '<script>alert("Incorrect Credentials Entered"); location.replace(document.referrer);</script>';

			 }

	}

//echo $email;
//echo '</br>';
//echo $password;



ob_end_flush();*/
?>

<?php
if(isset($_POST['submit'])) {
	
$name = $_POST['name'];
$phone = $_POST['num'];
$mailFrom = $_POST['email'];
$message = $_POST['comments'];
$satisfaction = $_POST['view'];
$sender = 'From: ' .$mailFrom;
$info = 'From: Craft Pop House.';
$sendertxt = "We had received your feedback. Thank you for your submission.\n\n".$info;

$txt = "You have received a feedback from the user: ".$name.".\n\n".$message;

//Admin Receive
mail('craftpophousekuching@gmail.com','New Feedback Form Submission From: ' .$mailFrom,$txt,$sender);

//Sender Receive
mail($mailFrom,'Thank you for sending us feedback!',$sendertxt,$sender);
header("Location: feedback_form.php?feedbacksend");
}