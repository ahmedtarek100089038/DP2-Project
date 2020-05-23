<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions.php';
$pdo = pdo_connect_mysql();

$stmt = $pdo->prepare('SELECT * FROM products ORDER BY product_title DESC LIMIT 18');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>

<html lang="en">

	<!-- Description: SWE30010 DEVELOPMENT PROJECT 2-DESIGN, PLANNING AND MANAGEMENT  -->
	<!-- Page: Developers Page (developers.php) -->
	<!-- Author: DP2 -->
	<!-- Date: 25/4/2020 -->
	
	<!-- =========HEAD STARTS HERE========= -->
<head>
    <title>Craft Pop House | Developers Page</title>
    <meta charset="utf-8">
    <meta name="author" content="DP2">
    <meta name="description" content="Craft Pop HouseDevelopers Page">
    <meta name="keywords" content="Developers, Craft Pop House">
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
		
	<!-- Page Content -->
	<div class="container">
		<!-- Page Heading/Breadcrumbs -->
		<h1 class="mt-4 mb-3">Our Developers</h1>

		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active">Developers</li>
		</ol>

		<div class="row">
			<div class="col-lg-4 mb-4">
				<div class="card h-100 text-center">
					<img class="card-img-top" src="images/ahmed1.jpg" alt="Ahmed Tarek">
					<div class="card-body">
						<h4 class="card-title">Ahmed Tarek</h4>
						<h6 class="card-subtitle mb-2 text-muted">Software Developer</h6>
						<p class="card-text">I'm from Alexandria, Egypt. I'm currently studying computer science in Swinburne University of Technology Sarawak. I enjoy developing websites because there is a design element to it which fits into my passion.</p>
					</div>
					<div class="card-footer">
						<a href="#">ahmedtarek5656@gmail.com</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 mb-4">
				<div class="card h-100 text-center">
					<img class="card-img-top" src="images/leejiajun.jpg" alt="Lee Jia Jun">
					<div class="card-body">
						<h4 class="card-title">Lee Jia Jun</h4>
						<h6 class="card-subtitle mb-2 text-muted">Software Developer</h6>
						<p class="card-text">I'm from Sabah. I'm currently studying computer science in Swinburne University of Technology Sarawak. I enjoy developing software and create something special.</p>
					</div>
					<div class="card-footer">
						<a href="#">jetixljj335@gmail.com</a>
					</div>
				</div>
			</div>
			
			<div class="col-lg-4 mb-4">
				<div class="card h-100 text-center">
					<img class="card-img-top" src="images/jasongoh.jpg" alt="Jason Goh">
					<div class="card-body">
						<h4 class="card-title">Jason Goh</h4>
						<h6 class="card-subtitle mb-2 text-muted">Software Developer</h6>
						<p class="card-text">I'm from Kuching, Sarawak. I'm currently studying computer science in Swinburne University of Technology Sarawak.</p>
					</div>
					<div class="card-footer">
						<a href="#">jasongohbl@gmail.com</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /.row -->
	
		<br />
		<br />
		<br />
		<br />
    </div>

	<!-- PHP to launch Footer -->
		<?php	
			include_once'footer.php';
		?>
	
	<!-- jQuery – required for Bootstrap's JavaScript plugins) --> 
    <script src="frameworks/js/jquery.min.js"></script>
	<!--All bootstrap plug in file -->
	<script src="frameworks/js/bootstrap.min.js"></script> 
	<script type='text/javascript' src="frameworks/js/jquery.shop.js"></script>
	<!--Start of Tawk.to Script-->
	<script type='text/javascript' src="frameworks/js/livechat.js"></script>
	
</body>
</html>