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
					<img class="card-img-top"  src="images/clothes1.jpg" alt="">
					
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
							<a class="btn btn-danger my-cart-btn my-cart-b" href="product_details.php">View Product</a>
						</div>
						
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">	
					<img class="card-img-top"  src="images/clothes18.jpg" alt="">
					
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
							<a class="btn btn-danger my-cart-btn my-cart-b" href="product_details.php">View Product</a>
						</div>
						
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card  text-center">
					<img class="card-img-top"  src="images/clothes14.jpg" alt="">

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
							<a class="btn btn-danger my-cart-btn my-cart-b" href="product_details.php">View Product</a>
						</div>
						
					</div>
				</div>
			</div>
			
			<div class="col-lg-3 col-sm-6 mb-3">
				<div class="card text-center">
					<img class="card-img-top"  src="images/clothes3.jpg" alt="">
					
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
							<p><label>RM 2000.00</label><em class="item_price">RM 1899.00</em></p>
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
					<img class="card-img-top"  src="images/craft1.jpg" alt="">

					<div class="card-body">
						<h4 class="card-title">Feather Crafts</h4>
						<h6 class="card-subtitle mb-2 text-muted">Home Decoration Feather Crafts</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 302 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p><label>RM 50.00</label><em class="item_price">RM 20.00</em></p>
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
					<img class="card-img-top"  src="images/decor0.jpg" alt="">

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
							<p><label>RM 80.00</label><em class="item_price">RM 40.00</em></p>
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
					<img class="card-img-top"  src="images/decor11.jpg" alt="">

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
							<p><label>RM 30.00</label><em class="item_price">RM 10.00</em></p>
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
					<img class="card-img-top"  src="images/homemade.jpg" alt="">

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
							<p><label>RM 100.00</label><em class="item_price">RM 54.00</em></p>
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
					<img class="card-img-top"  src="images/vintage8.jpg" alt="">

					<div class="card-body">
						<h4 class="card-title">Vintage Watch</h4>
						<h6 class="card-subtitle mb-2 text-muted">Vintage Watch</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star last"></i></li>
							<li><p> 94 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p><label>RM 1832.00</label><em class="item_price">RM 970.00</em></p>
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
					<img class="card-img-top"  src="images/vintage1.jpg" alt="">

					<div class="card-body">
						<h4 class="card-title">Vintage Camera</h4>
						<h6 class="card-subtitle mb-2 text-muted">Vintage Camera - High Quality</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 49 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p><label>RM 1200.00</label><em class="item_price">RM 780.00</em></p>
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
					<img class="card-img-top"  src="images/vintage5.jpg" alt="">

					<div class="card-body">
						<h4 class="card-title">Vintage Gramophone</h4>
						<h6 class="card-subtitle mb-2 text-muted">Vintage Gramophone</h6>
						<ul class="list">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><p> 10 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p><label>RM 600.00</label><em class="item_price">RM 450.00</em></p>
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
					<img class="card-img-top"  src="images/vintage0.jpg" alt="">

					<div class="card-body">
						<h4 class="card-title">Golden Wheel</h4>
						<h6 class="card-subtitle mb-2 text-muted">Vintage Golden Wheel Good</h6>
						<ul class="list">
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star"></i></li>
						  <li><i class="fa fa-star last"></i></li>
						  <li><p> 28 Sold</p></li>
						</ul>
						<div class="mid-2">
							<p><label>RM 199.00</label><em class="item_price">RM 99.00</em></p>
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