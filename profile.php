<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include 'db.php';
include 'functions.php';


?>

<!DOCTYPE html>

<html lang="en">

	<!-- Description: SWE30010 DEVELOPMENT PROJECT 2-DESIGN, PLANNING AND MANAGEMENT  -->
	<!-- Page: Login Page (login.php) -->
	<!-- Author: DP2 -->
	<!-- Date: 25/4/2020 -->
	
	<!-- =========HEAD STARTS HERE========= -->
<head>
    <title>Craft Pop House | Login Page</title>
    <meta charset="utf-8">
    <meta name="author" content="DP2">
    <meta name="description" content="Craft Pop House Login Page">
    <meta name="keywords" content="Login Page, craft pop house">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<!--Boostrap-->
	<link href="frameworks/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="frameworks/css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<script src="frameworks/js/scrollbutton.js"></script>
	<link rel="icon" href="images/logo.png"/> 
	
</head>
<body>
	
	<!-- PHP to launch navigation bar -->
		<?php	
			include_once'nav.php';
		?>
		
	<!-- PHP to launch Scroll Up -->
		<?php	
			include_once'scrollup.php';
		?>
	
	<div class="container">
		<h1 class="mt-4 mb-3">Profile Page</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active">Profile Page</li>
		</ol>
	
		  <p>Your account details are below:</p>
		
				
				<table>
					<tr>
						<td>First Name:</td>
						<td></td>
					</tr>
					
					<tr>
						<td>Last Name:</td>
						<td></td>
					</tr>
					<br />
					<tr>
						<td>Email:</td>
						<td></td>
					</tr>
					
					<tr>
						<td>Password:</td>
						<td></td>
					</tr>
					
					<tr>
						<td>Phone Number:</td>
						<td></td>
					</tr>
					
					<tr>
						<td>Address:</td>
						<td></td>
					</tr>
				</table>
		  
	</div>

	<!-- PHP to launch Footer -->
		<?php	
			include_once'footer.php';
		?>
	
		
	<!-- jQuery – required for Bootstrap's JavaScript plugins) --> 
    <script src="frameworks/js/jquery.min.js"></script>
	<!--All bootstrap plug in file -->
	<script src="frameworks/js/bootstrap.min.js"></script> 
	<!-- //for bootstrap working -->
	<script type='text/javascript' src="frameworks/js/jquery.shop.js"></script>
	
</body>
</html>