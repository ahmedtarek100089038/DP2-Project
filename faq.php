<!DOCTYPE html>

<html lang="en">

	<!-- Description: SWE30010 DEVELOPMENT PROJECT 2-DESIGN, PLANNING AND MANAGEMENT  -->
	<!-- Page: FAQ Page (faq.php) -->
	<!-- Author: DP2 -->
	<!-- Date: 25/4/2020 -->
	
	<!-- =========HEAD STARTS HERE========= -->
<head>
    <title>Craft Pop House | FAQ Page</title>
    <meta charset="utf-8">
    <meta name="author" content="DP2">
    <meta name="description" content="Craft Pop House FAQ Page">
    <meta name="keywords" content="FAQ Page, Craft Pop House">
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
		<!-- Page Heading/Breadcrumbs -->
		<h1 class="mt-4 mb-3">FAQ Page</h1>

		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active">FAQ Page</li>
		</ol>
		
		<div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="card">
				<div class="card-header" role="tab" id="headingOne">
					<h5 class="mb-0">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">HOW CAN I TRACK MY ORDERS & PAYMENT?</a>
					</h5>
				</div>

				<div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
					<div class="card-body">
						After logging into your account, the status of your checkout history can be found under Order History. For orders via registered postage, a tracking number (article tracking number) will be given to you after the receipt given from Poslaju.
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" role="tab" id="headingTwo">
					<h5 class="mb-0">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">HOW DO I CANCEL MY ORDERS BEFORE I MAKE A PAYMENT?</a>
					</h5>
				</div>
				
				<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
					<div class="card-body">
						After logging into your account, go to your Shopping Cart. Here, you will be able to make payment or cancel your order. Note: We cannot give refunds once payment is verified.
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" role="tab" id="headingThree">
					<h5 class="mb-0">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">HOW CAN I CHANGE MY SHIPPING ADDRESS?</a>
					</h5>
				</div>
				
				<div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
					<div class="card-body">
						By default, the last used shipping address will be saved into to your Sample Store account. When you are checking out your order, the default shipping address will be displayed and you have the option to amend it if you need to.
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" role="tab" id="headingFour">
					<h5 class="mb-0">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">HOW DO YOU SHIP MY ORDERS?</a>
					</h5>
				</div>
				
				<div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
					<div class="card-body">
						All your orders are sent via Poslaju.
					</div>
				</div>
			</div>
		  
			<div class="card">
				<div class="card-header" role="tab" id="headingFive">
					<h5 class="mb-0">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">WHY MUST I MAKE PAYMENT IMMEDIATELY AT CHECKOUT?</a>
					</h5>
				</div>
			
				<div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
					<div class="card-body">
						Sample ordering is on ‘first-come-first-served’ basis. To ensure that you get your desired samples, it is recommended that you make your payment within 60 minutes of checking out.
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" role="tab" id="headingSix">
					<h5 class="mb-0">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">WHAT HAPPENS IF THERE'S BEEN A DELIVERY MISHAP TO MY ORDER? (DAMAGED OR LOST DELIVERY)</a>
					</h5>
				</div>
				
				<div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
					<div class="card-body">
						We take such matters very seriously and will look into individual cases thoroughly. Any sample that falls under the below categories should not be thrown away before taking photo proof and emailing the photo of the affected sample and your D.O (Delivery Order) to us at craftpophouse@gmail.com (if applicable).
						<br />
						We regret to inform you that no refunds will be given for orders that fall under the below categories.
						<br />
						1. In the event of damaged samples received, we will require photo proof of the affected samples and your D.O (Delivery Order) in order for us to investigate and review before a decision is made to re-send the sample to you at no cost, subject to availability. In light of this, any sample that falls into this category should not be thrown away before taking photo proof and emailing the photo to us at craftpophouse@gmail.com
						<br />
						2. In the event of lost mail, we will try to locate the delivery team in Singpost and if there's a clear indication that your order is indeed lost, we'll re-send the order to you at no cost, subject to availability.
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" role="tab" id="headingSeven">
					<h5 class="mb-0">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">HOW SOON WILL I RECEIVE MY REFUND AFTER CANCELLING AN ORDER?</a>
					</h5>
				</div>
			
				<div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven">
					<div class="card-body">
						1. You will first receive an E-mail to confirm the cancellation of your order.
						<br />
						2. Note that different payment method will result in different time taken for your refund.
						<br />
						3. Normally refund takes around 7-14 working days to be returned to your bank account or your E-wallet.
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" role="tab" id="headingEight">
					<h5 class="mb-0">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">HOW CAN I RECEIVE THE LATEST PROMOTION NEWS FROM CRAFT POP HOUSE?</a>
					</h5>
				</div>
			
				<div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight">
					<div class="card-body">
						You can subscribe to our newsletter with your email and we will email you whenever there is a promotion of the products. Subscribe now!
					</div>
				</div>
			</div>
			
			<div class="card">
				<div class="card-header" role="tab" id="headingNine">
					<h5 class="mb-0">
						<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">WILL THE REFUNDED AMOUNT INCLUDE SHIPPING FEE?</a>
					</h5>
				</div>
			
				<div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine">
					<div class="card-body">
						The refund for your item is the actual paid price which includes the shipping fee.
						<br />
						Note: If your order has more than one item, the shipping fee will be divided accordingly.
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
	<script type='text/javascript' src="frameworks/js/jquery.shop.js"></script>

</body>
</html>