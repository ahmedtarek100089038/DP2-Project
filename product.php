<?php
session_start();
// Include functions and connect to the database using PDO MySQL
	include 'functions.php';
	include 'config.php';
	$slug = $_GET['product'];
	$pdo = pdo_connect_mysql();
	$stmt = $pdo->query("SELECT *, products.product_title, categories.cat_title, products.product_id  FROM products LEFT JOIN categories ON categories.cat_id=products.cat_id where product_id = $slug");
	$product = $stmt->fetch();

?>


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
				<img src="<?php echo (!empty($product['product_image'])) ? 'images/'.$product['product_image'] : 'images/noimage.jpg'; ?>" width="100%" height="600" class="zoom" data-magnify-src="images/large-<?php echo $product['product_image']; ?>">
			</div>
			<!--Grid column-->

			<!--Grid column-->
			<div class="col-md-6 mb-4">
			<!--Content-->
				<div id="site">
					<div class="product-description" data-name="<?php echo $product['product_title']; ?>" data-price="<?php echo number_format($product['product_price'], 2); ?>">
						<h1 class="page-header"><?php echo $product['product_title']; ?></h1>
						
						<ul class="list">
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
								</ul>
					
						<h3><b><em class="item_price"> RM <?php echo number_format($product['product_price'], 2); ?></em></b></h3>
		            	
						<hr>
						
						<p><b>Category:</b>  <?=$product['cat_title']?></p>
							
		           		<p><b>Description:</b></p>
		    
						<p><?php echo $product['product_desc']; ?></p>
					
						<hr>
				
						<div class="certified">
							<ul>
								<li><strong>Delivery time</strong><span>7 Working Days</span></li>
								<li><strong>Certified</strong><span>Quality Assured</span></li>
							</ul>
						</div> 
						
						<hr>
				
						<form class="form-inline" id="productForm">
						
							<div class="form-group">
								<div class="input-group col-sm-12">
									<h3 for="qty-1"><strong>Quantity:</strong></h3>
			            			
									<span class="input-group-btn">
			            				<button type="button" id="minus" class="btn btn-default btn-flat btn-lg"><i class="fa fa-minus"></i></button>
			            			</span>
							       	
									<input type="text" name="quantity" id="quantity" class="form-control input-lg" value="1" style="text-align: center;">
							        
									<span class="input-group-btn">
							            <button type="button" id="add" class="btn btn-default btn-flat btn-lg"><i class="fa fa-plus"></i></button>
							        </span>
									
									<input type="hidden" value="<?php echo $product['product_id']; ?>" name="id">
							        
								</div>
								
								<br><br><br><br>						
			            			
			            	</div>
							
							<button type="submit" class="btn btn-danger btn-lg btn-flat col-sm-12"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
		            	</form>
						<br><br>
						
						<form class="form-inline" action="#" method="post">
							<button type="submit" class="btn btn-primary btn-lg btn-flat col-sm-12"><i class="far fa-comment-dots"></i> Contact Seller</button>
						</form>
					</div>
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