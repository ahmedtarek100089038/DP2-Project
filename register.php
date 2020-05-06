<!DOCTYPE html>
<html lang="en">

	<!-- Description: SWE30010 DEVELOPMENT PROJECT 2-DESIGN, PLANNING AND MANAGEMENT  -->
	<!-- Page: Register Page (register.php)
	<!-- Author: DP2 -->
	<!-- Date: 25/4/2020 -->
	
	<!-- =========HEAD STARTS HERE========= -->
<head>
    <title>Craft Pop House | Register Page</title>
    <meta charset="utf-8">
    <meta name="author" content="DP2">
    <meta name="description" content="Craft Pop House Register Page">
    <meta name="keywords" content="Register Page, craft pop house">
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
		<h1 class="mt-4 mb-3">Register Page</h1>

		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active">Register Page</li>
		</ol>
		<div class="row">
			<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
				<div class="card card-signin my-5">
				<div class="card-body">	
					<h2 class="page-header text-center">Register</h2>
				
					<form class="form-signin" id="signup_form" onsubmit="return false">
				
					<div class="form-label-group">
						<label for="f_name">First Name</label>
						<input type="text" id="f_name" name="f_name" class="form-control" placeholder="First Name" required autofocus>
					</div>
				  
					<div class="form-label-group">
						<label for="f_name">Last Name</label>
						<input type="text" id="l_name" name="l_name" class="form-control" placeholder="Last Name" required autofocus>
					</div>
				
					<div class="form-label-group">
						<label for="email">Email Address</label>
						<input type="text" id="email" name="email" class="form-control" placeholder="Email Address" required autofocus>
					</div>
				
					<div class="form-label-group">
						<label for="password">Password</label>
						<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
					</div>
				
					<div class="form-label-group">
						<label for="repassword">Confirm Password</label>
						<input type="password" id="repassword" name="repassword" class="form-control" placeholder="Confirm Password" required>
					</div>
				
					<div class="form-label-group">
						<label for="mobile">Mobile</label>
						<input type="text" id="mobile" name="mobile" class="form-control" placeholder="Phone" required>
					</div>
				
					<div class="form-label-group">
						<label for="address1">Address Line 1</label>
						<input type="text" id="address1" name="address1" class="form-control" placeholder="Address Line 1" required>
					</div>
				
					<div class="form-label-group">
						<label for="address2">Address Line 2</label>
						<input type="text" id="address2" name="address2" class="form-control" placeholder="Address Line 1" required>
					</div>
				
					<div class="form-label-group">
						<input type="checkbox" name="termsAndConditions"> By Agree to our Terms & Privacy
					</div>
				
					<br/>
					<button onclick="window.location.href='login.php'" id="btn" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
					
	
				  	
					<hr>
				
					<div class="hrOr">
						<span class="spanOr"><strong>or</strong></span>
					</div>
				  
					<button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Register with Google</button>
					<button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Register with Facebook</button>
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

	<script type='text/javascript' src="frameworks/js/jquery.mycart.js"></script>
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
