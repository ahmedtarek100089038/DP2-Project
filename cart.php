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
	
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active">Shopping Cart</li>
		</ol>

		<div id="site">
			<div id="content">
				<h1>Your Shopping Cart</h1>
				<form id="shopping-cart" action="cart.php" method="post">
					<table class="shopping-cart" border>
						<thead>
							<tr>
								<th scope="col">Item</th>
								<th scope="col">Qty</th>
								<th scope="col" colspan="2">Price</th>
							</tr>
						</thead>
					<tbody>
					</tbody>
					</table>
					<p id="sub-total">
						<strong>Sub-Total</strong>: <span id="stotal"></span>
					</p>
					<ul id="shopping-cart-actions">
						<li>
							<input type="submit" name="update" id="update-cart" class="btn btn-primary btn-md my-0 p" value="Update Cart" />
						</li>
						<li>
							<input type="submit" name="delete" id="empty-cart" class="btn btn-danger btn-md my-0 p" value="Empty Cart" />
						</li>
						<li>
							<a href="index.php" class="btn btn-warning btn-md my-0 p">Continue Shopping</a>
						</li>
						<li>
							<a href="checkout.php" class="btn btn-success btn-md my-0 p">Checkout</a>
						</li>
					</ul>
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