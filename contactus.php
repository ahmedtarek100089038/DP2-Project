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
	<!-- Page: Contact Us Page (contactus.php) -->
	<!-- Author: DP2 -->
	<!-- Date: 25/4/2020 -->
	
	<!-- =========HEAD STARTS HERE========= -->
<head>
    <title>Craft Pop House |Contact Us Page</title>
    <meta charset="utf-8">
    <meta name="author" content="DP2">
    <meta name="description" content="Craft Pop House Contact Us Page">
    <meta name="keywords" content="contact, us, craft pop house">
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
		<h1 class="mt-4 mb-3">Contact Us </h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active">Contact Us</li>
		</ol>

		<!-- Content Row -->
		<div class="row">
			<!-- Map Column -->
			<div class="col-lg-8 mb-4">
				<!-- Embedded Google Map -->
				<iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;1.5535,110.3593&amp;spn=1.5535,110.3593&amp;t=m&amp;z=4&amp;output=embed"></iframe>
			</div>
			<!-- Contact Details Column -->
			<div class="col-lg-4 mb-4">
				<h3>Contact Details</h3>
				<p>
					Jalan Simpang Tiga, 93550
					<br>
					Kuching, Sarawak, Malaysia.
					<br>
				</p>
				<p>
					<i class="fa fa-phone"></i> : +60 82 415 353
				</p>
				<p>
				<i class="fa fa-envelope"></i> :
				<a href="mailto:craftpophousekuching@gmail.com">craftpophousekuching@gmail.com
				</a>
				</p>
				<p>
					Hours : Monday - Friday: 9:00 AM to 5:00 PM
				</p>
				<p>
					Public Holidays : Closed
				</p>
			</div>
		</div>
		<!-- /.row -->

		<!-- Contact Form -->
		<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
		<div class="row">
			<div class="col-lg-8 mb-4">
				<h3>Send Us A Message</h3>
				<form method="post" action="form-to-email.php" name="sentMessage" id="contactForm" >
					<div class="control-group form-group">
						<div class="controls">
							<label>Full Name:</label>
							<input type="text" class="form-control" name="name" placeholder="John Lee" id="name" required autofocus>
							<p class="help-block"></p>
						</div>
					</div>
					
					<div class="control-group form-group">
						<div class="controls">
							<label>Phone Number:</label>
							<input type="tel" class="form-control" name="phone" id="phone" placeholder="+6 019 800 8888" required autofocus>
						</div>
					</div>
					
					<div class="control-group form-group">
						<div class="controls">
							<label>Email Address:</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="johnlee@gmail.com" required autofocus>
						</div>
					</div>
					
					<div class="control-group form-group">
						<div class="controls">
							<label>Message:</label>
							<textarea rows="5" cols="80" class="form-control" name="message" id="message" placeholder="Enter your message here..." required autofocus  maxlength="999" style="resize:none"></textarea>
						</div>
					</div>
					<div id="success"></div>
					<!-- For success/fail messages -->
					<button type="submit" class="btn btn-primary" id="submit" name="submit" value="Send Form">Send Message</button>
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