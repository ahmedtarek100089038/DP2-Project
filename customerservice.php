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
	<!-- Page: Customer Service Page (customerservice.php) -->
	<!-- Author: DP2 -->
	<!-- Date: 27/5/2020 -->
	
	<!-- =========HEAD STARTS HERE========= -->
<head>
    <title>Craft Pop House | Customer Service Page</title>
    <meta charset="utf-8">
    <meta name="author" content="DP2">
    <meta name="description" content="Craft Pop House Customer Service Page">
    <meta name="keywords" content="customer, service, craft pop house">
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
		<h1 class="mt-4 mb-3">Customer Service </h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active">Customer Service</li>
		</ol>

		<!-- Content Row -->
		<div style="text-align:center;">
			<h3>We're Got Your Back</h3>
				<h5>Can't find what you need in FAQ page? Get in touch with our friendly team here.</h5>
				<img src="images/custservice.png" alt="Customer Service Team">
				<p style="font-weight: bold">Click <a href="https://tawk.to/chat/5ec938268ee2956d73a3e401/default" target="_blank">here</a> to chat with us now!</p>
				</br>
		</div>
		<!-- /.row -->

		<!-- Customer Service Form -->
		<div class="row">
			<div class="col-lg-8 mb-4">
				<h3>Send Us An Email Now</h3>
				<h6>We will get back to you as soon as possible.</h6>
				<form method="post" action="custservice-to-email.php" name="sentMessage" id="contactForm" >
					<div class="control-group form-group">
						<div class="controls">
							<label>Full Name:</label>
							<input type="text" class="form-control" name="name" placeholder="John Lee" id="name" required autofocus>
							<p class="help-block"></p>
						</div>
					</div>
					
					<div class="control-group form-group">
						<div class="controls">
							<label>Email Address:</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="Johnlee@gmail.com" required autofocus>
						</div>
					</div>
					
					<div class="control-group form-group">
						<div class="controls">
							<label>Title</label>
							<input type="text" class="form-control" name="title" id="title" placeholder="Refund / Return / Others" required autofocus>
						</div>
					</div>
					
					<div class="control-group form-group">
						<div class="controls">
							<label>Descriptions:</label>
							<textarea rows="5" cols="80" class="form-control" name="message" id="message" placeholder="Enter your descriptions here..." required autofocus  maxlength="999" style="resize:none"></textarea>
						</div>
					</div>
					<div id="success"></div>
					<!-- For success/fail messages -->
					<button type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Form">Send Email</button>
				</form>
			</div>
		</div>
    <!-- /.row -->
	</div>

	<!-- PHP to launch Footer -->
		<?php	
			include_once'footer.php';
		?>
	
	<!-- jQuery – required for Bootstrap's JavaScript plugins) --> 
    <script src="frameworks/js/jquery.min.js"></script>
	<!--All bootstrap plug in file -->
	<script src="frameworks/js/bootstrap.min.js"></script> 

	<script type='text/javascript' src="frameworks/js/jquery.mycart.js"></script>
	
	<!--Start of Tawk.to Script-->
	<script type='text/javascript' src="frameworks/js/livechat.js"></script>
	
	<script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
	</script>
	
</body>
</html>