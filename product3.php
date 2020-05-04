<!DOCTYPE html>

<html lang="en">

	<!-- Description: SWE30010 DEVELOPMENT PROJECT 2-DESIGN, PLANNING AND MANAGEMENT  -->
	<!-- Page: Product3 (product3.php) -->
	<!-- Author: DP2 -->
	<!-- Date: 25/4/2020 -->
	
	<!-- =========HEAD STARTS HERE========= -->
<head>
    <title>Craft Pop House | Soft Toys</title>
    <meta charset="utf-8">
    <meta name="author" content="DP2">
    <meta name="description" content="Craft Pop House Soft Toys Page">
    <meta name="keywords" content="Soft Toys, craft pop house">
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
						<img class="card-img-top"  src="images/softtoy1.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Pokemon Soft Toy</h4>
						<h6 class="card-subtitle mb-2 text-muted">Charmander</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 244 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 76.00</label><em class="item_price">RM 25.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="Charmander" data-summary="summary 1" data-price="25.00" data-quantity="1" data-image="images/softtoy1.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/softtoy2.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Monster Inc Soft Toy</h4>
						<h6 class="card-subtitle mb-2 text-muted">Mike Wazowski</h6>
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
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="2" data-name="Mike" data-summary="summary 2" data-price="35.00" data-quantity="1" data-image="images/softtoy2.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card  text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/softtoy3.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Stuffed Koala Bear</h4>
						<h6 class="card-subtitle mb-2 text-muted">Feels like Australia</h6>
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
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Koala" data-summary="summary 3" data-price="75.00" data-quantity="1" data-image="images/softtoy3.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/softtoy4.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Kitty Cat</h4>
						<h6 class="card-subtitle mb-2 text-muted">Stuffed Pink Cute Cat</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 163 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 75.00</label><em class="item_price">RM 30.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="4" data-name="Kitty Cat" data-summary="summary 4" data-price="30.00" data-quantity="1" data-image="images/softtoy4.jpg">Add to Cart</button>
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
						<img class="card-img-top"  src="images/softtoy5.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Stitch and Angel Set</h4>
						<h6 class="card-subtitle mb-2 text-muted">Cute Stuffed Soft Toy Set</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star last"></i></li>
							<li><p> 98 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 130.00</label><em class="item_price">RM 99.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="5" data-name="Gold Necklaces & Earring" data-summary="summary 5" data-price="99.00" data-quantity="1" data-image="images/softtoy5.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card  text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/softtoy6.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Stuffed Penguin</h4>
						<h6 class="card-subtitle mb-2 text-muted">All the way from the South Pole</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 275 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 79.00</label><em class="item_price">RM 39.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="6" data-name="Silver Ring" data-summary="summary 6" data-price="39.00" data-quantity="1" data-image="images/softtoy6.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/softtoy7.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Pokemon Soft Toy</h4>
						<h6 class="card-subtitle mb-2 text-muted">Pikachu</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 433 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 49.00</label><em class="item_price">RM 27.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="7" data-name="Pikachu" data-summary="summary 7" data-price="27.00" data-quantity="1" data-image="images/softtoy7.jpg">Add to Cart</button>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/softtoy8.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Handmade Fox Soft Toy</h4>
						<h6 class="card-subtitle mb-2 text-muted">Limited Edition!!</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star last"></i></li>
							<li><p> 79 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 99.00</label><em class="item_price">RM 79.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="8" data-name="Fox" data-summary="summary 8" data-price="79.00" data-quantity="1" data-image="images/softtoy8.jpg">Add to Cart</button>
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