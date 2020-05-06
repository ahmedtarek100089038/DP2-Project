<!DOCTYPE html>

<html lang="en">

	<!-- Description: SWE30010 DEVELOPMENT PROJECT 2-DESIGN, PLANNING AND MANAGEMENT  -->
	<!-- Page: Homepage (index.php) -->
	<!-- Author: DP2 -->
	<!-- Date: 25/4/2020 -->
	
	<!-- =========HEAD STARTS HERE========= -->
<head>
    <title>Craft Pop House | Home Page</title>
    <meta charset="utf-8">
    <meta name="author" content="DP2">
    <meta name="description" content="Craft Pop HouseHome Page">
    <meta name="keywords" content="HomePage, craft pop house">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<!--Boostrap-->
	<link href="frameworks/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="frameworks/css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	<script src="frameworks/js/scrollbutton.js"></script>
	<link rel="icon" href="images/logo.png"/>

</head>
<body>
	<div onload="myFunction()">
		<div id="loading"></div>
		<div id="popUpMain" style="display: none;">
			<div id="popup">
				<img class="new" src="images/welcome.png" alt="new arrival">
				<br>
				<button class="submitId btn btn-danger"> Close </button>
			</div>
		</div>

		<script src="frameworks/js/jquery.min.js"></script>
	
		<script>
	var preloader = document.getElementById("loading");
		function myFunction(){
			preloader.style.display = 'none';
		};

	$(document).ready(function(){
		setTimeout(function(){
			$('#popUpMain').css('display','block'); }, 1500);
	});

	$('.submitId').click(function(){
		$('#popUpMain').css('display','none');
	});

		</script>
	</div>

	<!-- PHP to launch navigation bar -->
		<?php	
			include_once'nav.php';
		?>
		
	<!-- PHP to launch Scroll Up -->
		<?php	
			include_once'scrollup.php';
		?>
	

	<div id="carousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
			<li data-target="#carousel" data-slide-to="3"></li>
			<li data-target="#carousel" data-slide-to="4"></li>
			<li data-target="#carousel" data-slide-to="5"></li>
			<li data-target="#carousel" data-slide-to="6"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="images/slideshow1.png" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="images/slideshow2.png" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="images/slideshow3.png" alt="Third slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="images/slideshow4.png" alt="Fourth slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="images/slideshow5.png" alt="Fifth slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="images/slideshow6.png" alt="Sixth slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="images/slideshow7.png" alt="Seventh slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="container">	
		<div class="row">
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<img class="card-img-top"  src="images/clothing1.jpg" alt="">
					
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
							<a class="btn btn-danger my-cart-btn my-cart-b" href="product_details.php">View Product</a>
						</div>
						
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">	
					<img class="card-img-top"  src="images/clothing5.jpg" alt="">
					
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
							<a class="btn btn-danger my-cart-btn my-cart-b" href="product_details.php">View Product</a>
						</div>
						
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card  text-center">
					<img class="card-img-top"  src="images/clothing7.jpg" alt="">

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
							<a class="btn btn-danger my-cart-btn my-cart-b" href="product_details.php">View Product</a>
						</div>
						
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<img class="card-img-top"  src="images/clothing8.png" alt="">
					
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
				<div class="card  text-center">
					<img class="card-img-top"  src="images/jewellery5.jpg" alt="">

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
							<a class="btn btn-danger my-cart-btn my-cart-b" href="product_details.php">View Product</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<img class="card-img-top"  src="images/jewellery6.jpg" alt="">

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
			
		</div>
		<!-- /.row -->
	</div>

	<!-- subscribe_area part start-->
    <section class="subscribe_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="subscribe_area_text text-center">
                        <h5>Join Our Newsletter</h5>
                        <h2>Subscribe to get Updated
                            with new offers</h2>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="enter email address"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href="#" class="input-group-text btn_2" id="basic-addon2">subscribe now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<img class="card-img-top"  src="images/softtoy3.jpg" alt="">

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
							<a class="btn btn-danger my-cart-btn my-cart-b" href="product_details.php">View Product</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<img class="card-img-top"  src="images/softtoy5.jpg" alt="">

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
							<a class="btn btn-danger my-cart-btn my-cart-b" href="product_details.php">View Product</a>
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
						<h6 class="card-subtitle mb-2 text-muted">Cute little penguins</h6>
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
		</div>
		<!-- /.row -->
		
		<div class="row">
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/handmade1.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Handmade Rattan Basket</h4>
						<h6 class="card-subtitle mb-2 text-muted">Different colours to choose from</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 119 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 100.00</label><em class="item_price">RM 50.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="1" data-name="Handmade Rattan Basket" data-summary="summary 1" data-price="50.00" data-quantity="1" data-image="images/handmade1.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/handmade2.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Handmade Crayon Bookmark</h4>
						<h6 class="card-subtitle mb-2 text-muted">Made by young children from age 7-10</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 479 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 20.00</label><em class="item_price">RM 15.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="2" data-name="Handmade Crayon Bookmark" data-summary="summary 2" data-price="15.00" data-quantity="1" data-image="images/handmade2.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			
			
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card  text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/handmade3.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Handmade Patterned Basket</h4>
						<h6 class="card-subtitle mb-2 text-muted">Beautiful coloured mosaic design</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 389 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 150.00</label><em class="item_price">RM 75.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="3" data-name="Handmade Patterned Basket" data-summary="summary 3" data-price="75.00" data-quantity="1" data-image="images/handmade3.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
						<img class="card-img-top"  src="images/handmade4.jpg" alt="">
					</a>
					<div class="card-body">
						<h4 class="card-title">Handmade Cup Holder</h4>
						<h6 class="card-subtitle mb-2 text-muted">Knitted special sunflower design</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 122 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 40.00</label><em class="item_price">RM 25.00</em></p>
							<div class="block">
								<div class="starbox small ghosting"> </div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="add add-2">
							<button class="btn btn-danger my-cart-btn my-cart-b" data-id="4" data-name="Handmade Cup Holder" data-summary="summary 4" data-price="25.00" data-quantity="1" data-image="images/handmade4.jpg">Add to Cart</button>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- /.row -->
		
		<div class="row">
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<img class="card-img-top"  src="images/decor1.jpg" alt="">

					<div class="card-body">
						<h4 class="card-title">Feather Crafts</h4>
						<h6 class="card-subtitle mb-2 text-muted">Home Decoration Feather</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 302 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 50.00</label><em class="item_price">RM 20.00</em></p>
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
					<img class="card-img-top"  src="images/decor2.jpg" alt="">

					<div class="card-body">
						<h4 class="card-title">Wine bottle craft</h4>
						<h6 class="card-subtitle mb-2 text-muted">Wine bottle craft decoration</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 86 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 80.00</label><em class="item_price">RM 40.00</em></p>
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
					<img class="card-img-top"  src="images/decor3.jpg" alt="">

					<div class="card-body">
						<h4 class="card-title">Tulle Roll</h4>
						<h6 class="card-subtitle mb-2 text-muted">Tulle Roll 25Yard </h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star last"></i></li>
							<li><i class="fa fa-star last"></i></li>
							<li><p> 31 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 30.00</label><em class="item_price">RM 10.00</em></p>
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
					<img class="card-img-top"  src="images/decor4.jpg" alt="">

					<div class="card-body">
						<h4 class="card-title">LED Decoration</h4>
						<h6 class="card-subtitle mb-2 text-muted">Homemade LED Decoration</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 212 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p ><label>RM 100.00</label><em class="item_price">RM 54.00</em></p>
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