<!DOCTYPE html>

<html lang="en">

	<!-- Description: SWE30010 DEVELOPMENT PROJECT 2-DESIGN, PLANNING AND MANAGEMENT  -->
	<!-- Page: Product Details (product_details.php) -->
	<!-- Author: DP2 -->
	<!-- Date: 25/4/2020 -->
	
	<!-- =========HEAD STARTS HERE========= -->
<head>
    <title>Craft Pop House | Product Details</title>
    <meta charset="utf-8">
    <meta name="author" content="DP2">
    <meta name="description" content="Craft Pop House Product Details Page">
    <meta name="keywords" content="HomePage, craft pop house">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<!--Boostrap-->
	<link href="frameworks/css/bootstrap.min.css" rel="stylesheet"/>
	<script src="frameworks/js/jquery.shop.js"></script>
    <link href="frameworks/css/style.css" rel="stylesheet" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
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
		
    <div class="container ">
		<h1 class="mt-4 mb-3">Product Details</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active">Product Details Page</li>
		</ol>
		<!--Grid row-->
		<div class="row wow fadeIn">
			<!--Grid column-->
			<div class="preview col-md-6">	
				<div class="preview-pic tab-content">
					<div class="tab-pane active" id="pic-1"><img class="card-img-top" src="images/product_details.jpg" /></div>
					<div class="tab-pane" id="pic-2"><img src="images/product_details1.jpg" /></div>
					<div class="tab-pane" id="pic-3"><img src="images/product_details11.jpg" /></div>
					<div class="tab-pane" id="pic-4"><img src="images/product_details111.jpg" /></div>
					<div class="tab-pane" id="pic-5"><img src="images/product_details1111.jpg" /></div>
				</div>
				<ul class="preview-thumbnail nav nav-tabs">
				<li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="images/product_details.jpg" /></a></li>
				<li><a data-target="#pic-2" data-toggle="tab"><img src="images/product_details1.jpg" /></a></li>
				<li><a data-target="#pic-3" data-toggle="tab"><img src="images/product_details11.jpg" /></a></li>
				<li><a data-target="#pic-4" data-toggle="tab"><img src="images/product_details111.jpg" /></a></li>
				<li><a data-target="#pic-5" data-toggle="tab"><img src="images/product_details1111.jpg" /></a></li>
				</ul>
			</div>
			<!--Grid column-->

			<!--Grid column-->
			<div class="col-md-6 mb-4">
			<!--Content-->
				<div id="site">
					<div class="product-description" data-name="Adidas  HODIE" data-price="50">
						<h3>Adidas  HODIE</h3>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 105 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p><label>RM 100.00</label><em class="item_price">RM 50.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
				
						<p class="lead font-weight-bold">Description</p>
					
						<hr>

						<p>suitable for men with a perfect design and combination of color.full length sleeves with ribbed wrist cuffs and a ribbed waistband.</p>
				  
						<hr>
				
						<div class="certified">
							<ul>
								<li><strong>Delivery time</strong><span>7 Working Days</span></li>
								<li><strong>Certified</strong><span>Quality Assured</span></li>
							</ul>
						</div> 
				
						<hr>
				
						<form class="add-to-cart" action="cart.php" method="post">
							<div>
								<div>
									<label for="qty-1"><strong>Quantity</strong></label>
									<input type="number" name="qty-1" id="qty-1" class="qty" value="1" min="1">
								</div>
							</div>
							<p><input type="submit" value="ADD TO CART" class="btn btn-danger btn-md my-0 p"></p>
						</form>
				
						<form class="contact-seller" action="#" method="post">
							<p><input type="submit" value="Contact Seller" class="btn btn-primary btn-md my-0 p"></p>
						</form>
					</div>
			<!--Content-->
				</div>
				<!--Grid column-->
			</div>
		<!--Grid row-->
		<hr>

		<!--Grid row-->
		<div class="row d-flex justify-content-center wow fadeIn">
			<!--Grid column-->
			<div class="col-md-6 text-center">
				<h4 class="my-4 h4">REVIEWS</h4>
			</div>
			<!--Grid column-->
		</div>
		<!--Grid row-->

		<!--Grid row-->
		<div class="row wow fadeIn">
			<!-- Comments Form -->
			<div class="card my-4">
				<h5 class="card-header">Leave a Comment:</h5>
				<div class="card-body">
					<form>
						<div class="form-group">
							<textarea class="form-control" rows="3"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>

			<!-- Single Comment -->
			<div class="media mb-4">
				<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
				<div class="media-body">
					<h5 class="mt-0">Commenter Name</h5>
					Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
				</div>
			</div>

			<!-- Comment with nested comments -->
			<div class="media mb-4">
				<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
				<div class="media-body">
					<h5 class="mt-0">Commenter Name</h5>
					Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
			
				<div class="media mt-4">
					<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
					<div class="media-body">
						<h5 class="mt-0">Commenter Name</h5>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</div>
				</div>

				<div class="media mt-4">
					<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
					<div class="media-body">
					<h5 class="mt-0">Commenter Name</h5>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</div>
				</div>

				</div>
			</div>
		
			<div class="media mb-4">
				<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
				<div class="media-body">
					<h5 class="mt-0">Commenter Name</h5>
					Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
				</div>
				</div>
		
				<div class="media mb-4">
				<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
				<div class="media-body">
					<h5 class="mt-0">Commenter Name</h5>
					Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
				</div>
				</div>
		</div>
      <!--Grid row-->
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