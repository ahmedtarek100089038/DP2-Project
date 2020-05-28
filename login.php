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
		<h1 class="mt-4 mb-3">Login Page</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active">Login Page</li>
		</ol>
		<div class="row">
			<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
				<div class="card card-signin my-5">
					<div class="card-body">
						<h2 class="page-header text-center">Login</h2>
				
				
					<form action="v-login.php" method="post" id="login" class="form-signin">
						<div class="form-label-group">
							<label for="email">Email address</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
						</div>

						<div class="form-label-group">
							<label for="password">Password</label>
							<input type="password" name="password" id="password" id="password" class="form-control" placeholder="Password" required>
						</div>
						<br/>
						<button  class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit">Sign in</button>
				  
						<hr>
				
						<div class="forgotPassw">
							<a href="register.php">Register a new account</a>
						</div>
				
						<hr>
				
						<div class="hrOr">
							<span class="spanOr"><strong>or</strong></span>
						</div>
				  
						<button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
						<button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
					</form>
				
					</div>
				</div>
			</div>
		</div>
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