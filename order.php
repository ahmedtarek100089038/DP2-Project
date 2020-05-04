<!DOCTYPE html>

<html lang="en">

	<!-- Description: SWE30010 DEVELOPMENT PROJECT 2-DESIGN, PLANNING AND MANAGEMENT  -->
	<!-- Page: Order (order.php) -->
	<!-- Author: DP2 -->
	<!-- Date: 25/4/2020 -->
	
	<!-- =========HEAD STARTS HERE========= -->
<head>
    <title>Craft Pop House | Order Page</title>
    <meta charset="utf-8">
    <meta name="author" content="DP2">
    <meta name="description" content="Craft Pop HouseHome Order Page">
    <meta name="keywords" content="Order Page, craft pop house">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<!--Boostrap-->
	<link href="frameworks/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="frameworks/css/style.css" rel="stylesheet" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<script src="frameworks/js/scrollbutton.js"></script>
	<script src="jquery.shop.js"></script>
	<script src="javascript.js"></script>
	<link rel="icon" href="images/logo.png"/> 

</head>
<body id="checkout-page">
	
	<!-- PHP to launch navigation bar -->
		<?php	
			include_once'nav.php';
		?>
		
	<!-- PHP to launch Scroll Up -->
		<?php	
			include_once'scrollup.php';
		?>
	
	
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active">Order Page</li>
		</ol>

		<div id="site">
			<div id="content">
				<h1>Your Order</h1>
				<table id="checkout-cart" class="shopping-cart">
					<thead>
						<tr>
							<th scope="col">Item</th>
							<th scope="col">Qty</th>
							<th scope="col">Price</th>
						</tr>
					</thead>
					<tbody>
					  
					</tbody>
				</table>
				<div id="pricing">
					<p id="shipping">
						<strong>Shipping</strong>: <span id="sshipping"></span>
					</p>
					
					<p id="sub-total">
						<strong>Total</strong>: <span id="stotal"></span>
					</p>
				 </div>
			
				<form id="paypal-form" action="" method="post">
					<input type="submit" id="paypal-btn" class="btn btn-success btn-md my-0 p" value="Pay with PayPal" />
				</form>
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
	<script type='text/javascript' src="frameworks/js/jquery.shop.js"></script>

</body>
</html>