<!DOCTYPE html>

<html lang="en">

	<!-- Description: SWE30010 DEVELOPMENT PROJECT 2-DESIGN, PLANNING AND MANAGEMENT  -->
	<!-- Page: About Page (about.php) -->
	<!-- Author: DP2 -->
	<!-- Date: 25/4/2020 -->
	<!-- =========HEAD STARTS HERE========= -->
<head>
    <title>Craft Pop House |About Page</title>
    <meta charset="utf-8">
    <meta name="author" content="DP2">
    <meta name="description" content="About Page">
    <meta name="keywords" content="About Page">
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
		<h1 class="mt-4 mb-3">About Company</h1>

		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active">About Company</li>
		</ol>

		<!-- Intro Content -->
		<div class="row">
			<div class="col-lg-6">
				<img class="img-fluid rounded mb-4" src="images/about.jpg" alt="">
			</div>
			<div class="col-lg-6">
				<h2>About Modern Business</h2>
				<p>Craft Pop House is a local boutique shop selling the best homemade crafts and arts in Kuching. This boutique shop  is  selling  local  homemade  products  such  as  clothing,  jewellery, soft toys, handmade items, room décor, vintage goods and craft supplies. They partner with creative local entrepreneurs who use Craft Pop House as a platform to sell what they make or curate. In Craft Pop House, creative entrepreneurs  can  find  meaningful  work  selling  their  goods  in  the  local markets.  It  has  become  a marketplace which helps the local entrepreneurs to grow.</p>
				<p>Craft Pop House is setup in 2016 in which their business is running locally in a shop lot in Kuching, Sarawak.  However,  in  September  2018,  they  have  started  to  register  a  business  page  on a  social platform   to   conduct  online  businesses   across   the  world.</p>
				<p>Craft Pop House has decided to setup an official e-commerce site which will connect directly with buyers and sellers all around the world. Their primary aim is to provide a marketplace which allows thoughtful consumers to discover handmade crafts and build relationships with the people who make and  sell.  They  value  craftsmanship  by  creative  entrepreneurs  and  they  aim  for  a  mindful  and transparent  business.</p>
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