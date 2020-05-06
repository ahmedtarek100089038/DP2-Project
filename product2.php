<!DOCTYPE html>

<html lang="en">

	<!-- Description: SWE30010 DEVELOPMENT PROJECT 2-DESIGN, PLANNING AND MANAGEMENT  -->
	<!-- Page: Product2 (product2.php) -->
	<!-- Author: DP2 -->
	<!-- Date: 25/4/2020 -->
	
	<!-- =========HEAD STARTS HERE========= -->
<head>
    <title>Craft Pop House | Jewellery Page</title>
    <meta charset="utf-8">
    <meta name="author" content="DP2">
    <meta name="description" content="Craft Pop House Jewellery Page">
    <meta name="keywords" content="Jewellery, craft pop house">
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
	
		<h1>Jewellery Category</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item">Categories</li>
			<li class="breadcrumb-item active">Jewellery</li>
		</ol>
		
		<div class="row">
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/jewellery1.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Indian Handmade Jewellery</h4>
						<h6 class="card-subtitle mb-2 text-muted">Green Orange Jewellery</h6>
						<ul class="list">
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><p> 149 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 25.00</label><em class="item_price">RM 12.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
						<button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="Indian Handmade 1" data-summary="summary 1" data-price="12.00" data-quantity="1" data-image="images/jewellery1.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/jewellery2.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Indian Handmade Jewellery</h4>
						<h6 class="card-subtitle mb-2 text-muted">Light Green Fuchsia Pink</h6>
						<ul class="list">
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><p> 128 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 25.00</label><em class="item_price">RM 12.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
						<button class="btn btn-danger my-cart-btn my-cart-b" data-id="2" data-name="Indian Handmade 2" data-summary="summary 2" data-price="12.00" data-quantity="1" data-image="images/jewellery2.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card  text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/jewellery3.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Handmade 925 Sterling Silver</h4>
						<h6 class="card-subtitle mb-2 text-muted">Oval shaped with "X" design</h6>
						<ul class="list">
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><p> 23 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 299.00</label><em class="item_price">RM 149.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
						<button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Oval Sterling Silver" data-summary="summary 3" data-price="149.00" data-quantity="1" data-image="images/jewellery3.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/jewellery4.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Handmade 925 Sterling Silver</h4>
						<h6 class="card-subtitle mb-2 text-muted">Heart shaped design</h6>
						<ul class="list">
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><p> 18 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 299.00</label><em class="item_price">RM 129.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
						<button class="btn btn-danger my-cart-btn my-cart-b" data-id="4" data-name="Polo Shirt" data-summary="summary 4" data-price="129.00" data-quantity="1" data-image="images/jewellery4.jpg">Add to Cart</button>
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
						<img class="card-img-top"  src="images/jewellery5.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Tassel Beaded Bracelet</h4>
						<h6 class="card-subtitle mb-2 text-muted">Jet Black Design</h6>
						<ul class="list">
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star last"></i></li>
						  <li><p> 43 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 189.00</label><em class="item_price">RM 99.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
						<button class="btn btn-danger my-cart-btn my-cart-b" data-id="5" data-name="Tassel Beaded Bracelet" data-summary="summary 5" data-price="99.00" data-quantity="1" data-image="images/jewellery5.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card  text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/jewellery6.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Vintage Silver Necklace</h4>
						<h6 class="card-subtitle mb-2 text-muted">Sherlock Holmes Design</h6>
						<ul class="list">
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><p> 275 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 259.00</label><em class="item_price">RM 179.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
						<button class="btn btn-danger my-cart-btn my-cart-b" data-id="6" data-name="Silver Necklace" data-summary="summary 6" data-price="179.00" data-quantity="1" data-image="images/jewellery6.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/jewellery7.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Beaded Cuffs Jewellery</h4>
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
							<p ><label>RM 79.00</label><em class="item_price">RM 39.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
						<button class="btn btn-danger my-cart-btn my-cart-b" data-id="7" data-name="Beaded Cuffs Jewellery" data-summary="summary 7" data-price="39.00" data-quantity="1" data-image="images/jewellery7.jpg">Add to Cart</button>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/jewellery8.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Tagua Nut Necklaces</h4>
						<h6 class="card-subtitle mb-2 text-muted">Special Designed Necklaces</h6>
						<ul class="list">
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star last"></i></li>
						  <li><p> 50 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 188.00</label><em class="item_price">RM 129.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
						<button class="btn btn-danger my-cart-btn my-cart-b" data-id="8" data-name="Gold Necklaces" data-summary="summary 8" data-price="129.00" data-quantity="1" data-image="images/jewellery8.jpg">Add to Cart</button>
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