<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions.php';
$pdo = pdo_connect_mysql();

$stmt = $pdo->prepare('SELECT * FROM products ORDER BY product_title DESC LIMIT 18');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


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

	<main>
		<div class="container">
			<div class="row">
					<div class="recentlyadded content-wrapper">
						<div class="products">
							<?php 
							foreach ($recently_added_products as $product): ?>
							<a href="product.php?product=<?=$product['product_id']?>" class="product">
								<img src="images/<?=$product['product_image']?>" width="250" height="250" alt="">
								<hr>
								<h4 class="name"><?=$product['product_title']?></h4>
								<h6 class="name"><?=$product['product_desc']?></h6>
								<div class="col-md-12">
									<ul class="list">
									  <li><i class="fa fa-star"></i></li>
									  <li><i class="fa fa-star"></i></li>
									  <li><i class="fa fa-star"></i></li>
									  <li><i class="fa fa-star"></i></li>
									  <li><i class="fa fa-star"></i></li>
									</ul>
								</div>
								<span class="price">
									<p><strong><em class="item_price"> RM <?=$product['product_price']?></em></strong></p>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="clearfix"></div>
								</span>
								<div class="add add-2">
								<button class="btn btn-danger my-cart-btn my-cart-b" href="index.php?page=product&id=<?=$product['product_id']?>">View Product</button>
								</div>
							</a>
							
							<?php endforeach; ?>
						</div>
					</div>
			</div>
		</div>
	</main>

	<!-- subscribe_area part start-->
    <section class="subscribe_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="subscribe_area_text text-center" method="post" action="subscribe-to-email.php">
                        <h5>Join Our Newsletter</h5>
                        <h2>Subscribe to get Updated
                            with new offers</h2>
                        <form method="post" action="subscribe-to-email.php" name="sendmailsubscribe" class="input-group" >
                            <input type="email" class="form-control" name="email" id="email" placeholder="johnlee@gmail.com" 
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button type="submit" name="submit" class="input-group-text btn_2" id="basic-addon2">subscribe now</button>
							</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	
	
	<!-- PHP to launch Footer -->
		<?php	
			include_once'footer.php';
		?>
	
	<!-- jQuery – required for Bootstrap's JavaScript plugins) --> 
    <script src="frameworks/js/jquery.min.js"></script>
	<!--All bootstrap plug in file -->
	<script src="frameworks/js/bootstrap.min.js"></script> 
	<script type='text/javascript' src="frameworks/js/jquery.shop.js"></script>
	<!--Start of Tawk.to Script-->
	<script type='text/javascript' src="frameworks/js/livechat.js"></script>

	
</body>
</html>