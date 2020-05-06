<!DOCTYPE html>

<html lang="en">

	<!-- Description: SWE30010 DEVELOPMENT PROJECT 2-DESIGN, PLANNING AND MANAGEMENT  -->
	<!-- Page: Product6 (product6.php) -->
	<!-- Author: DP2 -->
	<!-- Date: 25/4/2020 -->
	
	<!-- =========HEAD STARTS HERE========= -->
<head>
    <title>Craft Pop House | Vintage Goods Page</title>
    <meta charset="utf-8">
    <meta name="author" content="DP2">
    <meta name="description" content="Craft Pop House Page">
    <meta name="keywords" content="Vintage Goods, craft pop house">
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
		
		<h1>Vintage Good Category</h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item">Categories</li>
			<li class="breadcrumb-item active">Vintage Goods</li>
		</ol>
	
		<div class="row">
			
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<img class="card-img-top"  src="images/vintage1.jpg" alt="">

					<div class="card-body">
						<h4 class="card-title">Vintage Camera</h4>
						<h6 class="card-subtitle mb-2 text-muted">Vintage Camera from 1955</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star last"></i></li>
							<li><p> 4 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 999.00</label><em class="item_price">RM 499.00</em></p>
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
					<img class="card-img-top"  src="images/vintage2.jpg" alt="">

					<div class="card-body">
						<h4 class="card-title">Vintage Watch</h4>
						<h6 class="card-subtitle mb-2 text-muted">Vintage Watch from 1942</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 3 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 1200.00</label><em class="item_price">RM 780.00</em></p>
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
					<img class="card-img-top"  src="images/vintage3.jpg" alt="">

					<div class="card-body">
						<h4 class="card-title">CD Player</h4>
						<h6 class="card-subtitle mb-2 text-muted">CD player from 1966</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 10 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 600.00</label><em class="item_price">RM 450.00</em></p>
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
					<img class="card-img-top"  src="images/vintage4.jpg" alt="">

					<div class="card-body">
						<h4 class="card-title">Gramophone</h4>
						<h6 class="card-subtitle mb-2 text-muted">Gramophone from 1945</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star last"></i></li>
							<li><p> 8 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 399.00</label><em class="item_price">RM 199.00</em></p>
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
					<img class="card-img-top"  src="images/vintage5.jpg" alt="">

					<div class="card-body">
						<h4 class="card-title">Vintage Lamp</h4>
						<h6 class="card-subtitle mb-2 text-muted">Lamp from year 1978</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star last"></i></li>
							<li><p> 19 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 299.00</label><em class="item_price">RM 99.00</em></p>
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
					<img class="card-img-top"  src="images/vintage6.jpg" alt="">

					<div class="card-body">
						<h4 class="card-title">Gramophone</h4>
						<h6 class="card-subtitle mb-2 text-muted">Gramophone 1955 Vintage</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 3 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 1200.00</label><em class="item_price">RM 780.00</em></p>
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
					<img class="card-img-top"  src="images/vintage7.png" alt="">

					<div class="card-body">
						<h4 class="card-title">Vivitar Camera</h4>
						<h6 class="card-subtitle mb-2 text-muted">Camera from year 1977</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 10 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 600.00</label><em class="item_price">RM 450.00</em></p>
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
					<img class="card-img-top"  src="images/vintage8.jpg" alt="">

					<div class="card-body">
						<h4 class="card-title">Golden Wheel</h4>
						<h6 class="card-subtitle mb-2 text-muted">Golden wheel collection</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star last"></i></li>
							<li><p> 13 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 199.00</label><em class="item_price">RM 99.00</em></p>
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