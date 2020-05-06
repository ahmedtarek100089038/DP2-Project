<!DOCTYPE html>

<html lang="en">

	<!-- Description: SWE30010 DEVELOPMENT PROJECT 2-DESIGN, PLANNING AND MANAGEMENT  -->
	<!-- Page: Product1 (product1.php) -->
	<!-- Author: DP2 -->
	<!-- Date: 25/4/2020 -->
	
	<!-- =========HEAD STARTS HERE========= -->
<head>
    <title>Craft Pop House | Clothing Page</title>
    <meta charset="utf-8">
    <meta name="author" content="DP2">
    <meta name="description" content="Craft Pop House Clothing Page">
    <meta name="keywords" content="Clothing, craft pop house">
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
	
		<h1>Clothing Category</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item">Categories</li>
			<li class="breadcrumb-item active">Clothes</li>
		</ol>
	
		
		<div class="row">
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/clothing1.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Pink Checkered Skirt</h4>
						<h6 class="card-subtitle mb-2 text-muted">Pink Checkered Skirt</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 105 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 100.00</label><em class="item_price">RM 50.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="Pink Skirt" data-summary="summary 1" data-price="50.00" data-quantity="1" data-image="images/clothing1.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/clothing2.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Women's Purple Dress</h4>
						<h6 class="card-subtitle mb-2 text-muted">Women's Purple Dress</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 235 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 90.00</label><em class="item_price">RM 70.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="2" data-name="Women dress" data-summary="summary 2" data-price="70.00" data-quantity="1" data-image="images/clothing2.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card  text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/clothing3.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Men's Patterned White Tee</h4>
						<h6 class="card-subtitle mb-2 text-muted">Tradisional patterned tee</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 375 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 100.00</label><em class="item_price">RM 55.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Patterned Tee" data-summary="summary 3" data-price="55.00" data-quantity="1" data-image="images/clothing3.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/clothing4.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Men's Mismatched Flannel</h4>
						<h6 class="card-subtitle mb-2 text-muted">New blue & red design</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 163 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 200.00</label><em class="item_price">RM 125.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="4" data-name="Formal Shirt" data-summary="summary 4" data-price="125.00" data-quantity="1" data-image="images/clothing4.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- /.row -->
		
		<div class="row">
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/clothing5.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Men's Figured Cotton Shirt</h4>
						<h6 class="card-subtitle mb-2 text-muted">Small Red Couple Figured</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star last"></i></li>
							<li><p> 43 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 259.00</label><em class="item_price">RM 79.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="5" data-name="Men's Cotton Shirt" data-summary="summary 5" data-price="79.00" data-quantity="1" data-image="images/clothing5.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card  text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/clothing6.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Short Sleeves Fringed</h4>
						<h6 class="card-subtitle mb-2 text-muted">Tradition Tribal Design</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 275 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 250.00</label><em class="item_price">RM 99.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="6" data-name="Fringes" data-summary="summary 6" data-price="99.00" data-quantity="1" data-image="images/clothing6.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card  text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/clothing7.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Black & White Striped Dress</h4>
						<h6 class="card-subtitle mb-2 text-muted">Black & White officer wear</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 275 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 199.00</label><em class="item_price">RM 99.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="6" data-name="Striped Dress" data-summary="summary 6" data-price="99.00" data-quantity="1" data-image="images/clothing7.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card  text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/clothing8.png" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Polka Dotted Red Dress</h4>
						<h6 class="card-subtitle mb-2 text-muted">Modern Polka Dotted Dress</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 377 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 190.00</label><em class="item_price">RM 79.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="6" data-name="Polka Dotted Red Dress" data-summary="summary 6" data-price="79.00" data-quantity="1" data-image="images/clothing8.png">Add to Cart</button>
						</div>
						
					</div>
				</div>
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
	<script type='text/javascript' src="frameworks/js/jquery.shop.js"></script>

</body>
</html>