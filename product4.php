<!DOCTYPE html>

<html lang="en">

	<!-- Description: SWE30010 DEVELOPMENT PROJECT 2-DESIGN, PLANNING AND MANAGEMENT  -->
	<!-- Page: Product4 (product4.php) -->
	<!-- Author: DP2 -->
	<!-- Date: 25/4/2020 -->
	
	<!-- =========HEAD STARTS HERE========= -->
<head>
    <title>Craft Pop House | Handmade Items</title>
    <meta charset="utf-8">
    <meta name="author" content="DP2">
    <meta name="description" content="Craft Pop House Handmade Items Page">
    <meta name="keywords" content="Handmade Items, craft pop house">
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
		<div class="row">
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/clothes1.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Adidas  HODIE</h4>
						<h6 class="card-subtitle mb-2 text-muted">Men Adidas  HODIE</h6>
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
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="Adidas  HODIE" data-summary="summary 1" data-price="50.00" data-quantity="1" data-image="images/clothes1.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/clothes18.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Men short</h4>
						<h6 class="card-subtitle mb-2 text-muted">New Cotton Short</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 235 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 50.00</label><em class="item_price">RM 35.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="2" data-name="Men short" data-summary="summary 2" data-price="35.00" data-quantity="1" data-image="images/clothes18.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card  text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/clothes14.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Black Jeans</h4>
						<h6 class="card-subtitle mb-2 text-muted">Mens Slim Black Stretch Denim Jeans</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 375 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 150.00</label><em class="item_price">RM 75.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Black Jeans" data-summary="summary 3" data-price="75.00" data-quantity="1" data-image="images/clothes14.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/clothes3.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Polo Shirt</h4>
						<h6 class="card-subtitle mb-2 text-muted">Original Polo Shirt for men</h6>
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
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="4" data-name="Polo Shirt" data-summary="summary 4" data-price="125.00" data-quantity="1" data-image="images/clothes3.jpg">Add to Cart</button>
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
						<img class="card-img-top"  src="images/jewellery2.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Gold Necklaces</h4>
						<h6 class="card-subtitle mb-2 text-muted">Pure Gold Necklaces & Earring</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star last"></i></li>
							<li><p> 43 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 2000.00</label><em class="item_price">RM 1899.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="5" data-name="Gold Necklaces & Earring" data-summary="summary 5" data-price="1899.00" data-quantity="1" data-image="images/jewellery2.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card  text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/jewellery11.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Silver Ring</h4>
						<h6 class="card-subtitle mb-2 text-muted">Genuine Silver Large Ring</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 275 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 600.00</label><em class="item_price">RM 250.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="6" data-name="Silver Ring" data-summary="summary 6" data-price="250.00" data-quantity="1" data-image="images/jewellery11.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/jewellery10.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Diamond Necklaces</h4>
						<h6 class="card-subtitle mb-2 text-muted">Diamond Necklaces with gift</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 137 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 5500.00</label><em class="item_price">RM 4500.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="7" data-name="Diamond Necklaces" data-summary="summary 7" data-price="4500.00" data-quantity="1" data-image="images/jewellery10.jpg">Add to Cart</button>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/jewellery.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Gold Necklaces</h4>
						<h6 class="card-subtitle mb-2 text-muted">Gold Necklaces with Gift Box</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star last"></i></li>
							<li><p> 50 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 3758.00</label><em class="item_price">RM 3125.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="8" data-name="Gold Necklaces" data-summary="summary 8" data-price="3125.00" data-quantity="1" data-image="images/jewellery.jpg">Add to Cart</button>
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
	<script src="frameworks/js/jquery.shop.js"></script>

</body>
</html>