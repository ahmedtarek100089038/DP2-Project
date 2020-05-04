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
					<img class="card-img-top"  src="images/jewellery2.jpg" alt="">

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
							<a class="btn btn-danger my-cart-btn my-cart-b" href="product_details.php">View Product</a>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card  text-center">
					<img class="card-img-top"  src="images/jewellery11.jpg" alt="">

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
							<a class="btn btn-danger my-cart-btn my-cart-b" href="product_details.php">View Product</a>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<img class="card-img-top"  src="images/jewellery10.jpg" alt="">

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
							<a class="btn btn-danger my-cart-btn my-cart-b" href="product_details.php">View Product</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<img class="card-img-top"  src="images/jewellery.jpg" alt="">

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
							<a class="btn btn-danger my-cart-btn my-cart-b" href="product_details.php">View Product</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- /.row -->
		
		<div class="row">
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<img class="card-img-top"  src="images/jewellery1.jpg" alt="">
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
							<a class="btn btn-danger my-cart-btn my-cart-b" href="product_details.php">View Product</a>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<img class="card-img-top"  src="images/jewellery2.jpg" alt="">
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
							<a class="btn btn-danger my-cart-btn my-cart-b" href="product_details.php">View Product</a>
						</div>
						
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<img class="card-img-top"  src="images/jewellery7.jpg" alt="">
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
							<a class="btn btn-danger my-cart-btn my-cart-b" href="product_details.php">View Product</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<img class="card-img-top"  src="images/jewellery4.jpg" alt="">
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
							<a class="btn btn-danger my-cart-btn my-cart-b" href="product_details.php">View Product</a>
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