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
	
		<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
		
		<img class="navbar-brand" src="images/logo.png" style="max-width: 5%;" alt="logo" />
		
		<button class="navbar-toggler"  data-toggle="collapse" data-target="#collapse_navbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="collapse_navbar">
			<ul class="navbar-nav mx-auto">  
				<li class="nav-item active">
					<a class="nav-link" href="index.html"><i class="fa fa-home"></i></a>
				</li>
				<li class="navbar-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_categories" href="#">
					Categories
					<span class="carrot"></span>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdown_categories">
						<a class="dropdown-item" href="product1.html">Clothing</a>
							<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="product2.html">Jewellery</a>
							<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="product3.html">Soft Toys</a>
							<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="product4.html">Handmade Items</a>
							<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="product5.html">Room Decor</a>
							<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="product6.html">Vintage Goods</a>
					</div>
				</li>
				<li class="navbar-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_about" href="#">
					About
					<span class="carrot"></span>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdown_categories">
						<a class="dropdown-item" href="about.html">About Us</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="developers.html">Developers</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contactus.php">Contact Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="faq.html">FAQ</a>
				</li>
				<li class="navbar-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_support" href="#">
					Support
					<span class="carrot"></span>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdown_support">
						<a class="dropdown-item" href="termsandconditions.html">Terms and Conditions</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="feedback.html">Feedback</a>
					</div>
				</li>
			</ul>
			<div class="cart ml-auto">
					<a href="#"><span class="fa fa-shopping-cart my-cart-icon">
						<span class="glyphicon glyphicon-shopping-cart my-cart-badge"></span> 
						</span>
					</a>
				</div>
			<div class="input-group col-md-3">
				<input class="form-control py-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-info my-sm-0" type="submit">Search</button>
			</div>
			
			<div class="text">
				<a class="btn btn-danger" href="register.html">Sign Up</a>
				<a class="btn btn-warning" href="login.html">Login</a>
			</div>	
		</div>
	</nav>
	
	<div id="scroll-up">
		<button onclick="topFunction()" id="scroll-btn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
	</div>
	
	<!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Contact Us </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
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

	<footer class="py-5 bg-dark">
		<div class="footerwrap">	<!-- Footer Navigation -->
			<div class="footer_logo">	<!-- Footer Logo (navigate to homepage) -->
				<a href="index.html"><img src="images/logo.png" alt="Logo"/></a>
			</div>
			<div class="col-lg-4 col-md-6 column one">	<!-- column 1 -->
				<ul>
					<li><p class="strong"> Categories </p></li>
					<li><a href="product1.html"> Clothing </a></li>
					<li><a href="product2.html"> Jewellery </a></li>
					<li><a href="product3.html"> Soft Toys </a></li>
					<li><a href="product4.html"> Homemade Items </a></li>
					<li><a href="product5.html"> Room Decor </a></li>
					<li><a href="product6.html"> Vintage Goods </a></li>
				</ul>
			</div>
			
			<div class="col-lg-4 col-md-6 column two">	<!-- column 2 -->
				<ul>
					<li><p class="strong"> About </p></li>
					<li><a href="about.html"> About Us </a></li>
					<li><a href="developers.html"> Developers </a></li>
				</ul>
			</div>
			
			<div class="col-lg-4 col-md-6 column two">	<!-- column 3 -->
				<ul>
					<li><p class="strong"> Support </p></li>
					<li><a href="termsandconditions.html"> Terms & Conditions </a></li>
					<li><a href="faq.html"> FAQ </a></li>
					<li><a href="feedback.html"> Feedback </a></li>
				</ul>
			</div>
			
			<div class="col-lg-4 col-md-6 footer-newsletter">
            <h5>Join Our Newsletter</h5>
            <form action="" method="post">
             <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
		</div>
		
		<div class="bottom">	<!-- Page Information -->
			<p> &copy; Copyright <strong><span>Craft Pop House</span></strong>. All Rights Reserved <br/> Last Updated: 30/04/2020</p>
		</div>
	</footer>
	
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