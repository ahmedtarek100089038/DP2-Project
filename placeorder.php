<?php


unset($_SESSION["cart"]);
?>


<?=template_header('Place Order')?>

<!DOCTYPE html>

<html lang="en">

	<!-- Description: SWE30010 DEVELOPMENT PROJECT 2-DESIGN, PLANNING AND MANAGEMENT  -->
	<!-- Page: Cart (cart.php) -->
	<!-- Author: DP2 -->
	<!-- Date: 25/4/2020 -->
	
	<!-- =========HEAD STARTS HERE========= -->
<head>
    <title>Craft Pop House | Cart</title>
    <meta charset="utf-8">
    <meta name="author" content="DP2">
    <meta name="description" content="Craft Pop House Cart Page">
    <meta name="keywords" content="HomePage, craft pop house, cart">
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
		
		<div class="placeorder content-wrapper">
			<h1>Your Order Has Been Placed</h1>
			<p>Thank you for ordering with us, we'll contact you by email with your order details.</p>
		</div>
		
	</div>
	
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />

	<!-- PHP to launch Footer -->
		<?php	
			include_once'footer.php';
		?>
	
	<!-- jQuery – required for Bootstrap's JavaScript plugins) --> 
    <script src="frameworks/js/jquery.min.js"></script>
	<!--All bootstrap plug in file -->
	<script src="frameworks/js/bootstrap.min.js"></script> 
	<script type='text/javascript' src="frameworks/js/jquery.shop.js"></script>
	
</body>
</html>

