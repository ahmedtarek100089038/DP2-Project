<?php
session_start();
// Include functions and connect to the database using PDO MySQL
include 'functions.php';
$pdo = pdo_connect_mysql();

	$slug = $_GET['category'];



	try{
		$stmt = $pdo->prepare("SELECT * FROM categories WHERE cat_slug = :slug");
		$stmt->execute(['slug' => $slug]);
		$cat = $stmt->fetch();
		$catid = $cat['cat_id'];
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}

?>



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
<main>
		
		<div class="container">
			
			<?php
			
			try{
		       	$inc = 3;	
				$stmt = $pdo->prepare("SELECT cat_title FROM categories WHERE cat_id = :catid");
				$stmt->execute(['catid' => $catid]);
			    foreach ($stmt as $row) {
					echo "
						<h1>Categories</h1>
						<ol class='breadcrumb'>
							<li class='breadcrumb-item'>
								<a href='index.php'>Home</a>
							</li>
							<li class='breadcrumb-item'>Categories</li>
							<li class='breadcrumb-item active'>".$row["cat_title"]."</li>
						</ol>
					";
			
				}
 
			}
			catch(PDOException $e){
				echo "There is some problem in connection: " . $e->getMessage();
			}
			
			?>
			
		
			<div class="row">
					<div class="recentlyadded content-wrapper">
						<div class="products">
							<?php
		       			try{
		       			 	$inc = 3;	
						    $stmt = $pdo->prepare("SELECT * FROM products WHERE cat_id = :catid");
						    $stmt->execute(['catid' => $catid]);
						    foreach ($stmt as $row) {
						    	$image = (!empty($row['product_image'])) ? 'images/'.$row['product_image'] : 'images/noimage.jpg';
								$inc = ($inc == 3) ? 1 : $inc + 1;
	       						echo "
											
															<a href='product.php?product=".$row['product_id']."' class='product'>
															<img src='images/".$row['product_image']."' width='250' height='250' alt=''>
															<hr>
															<h4 class='name'>".$row["product_title"]."</h4>
															<h6 class='name'>".$row['product_desc']."</h6>
															<div class='col-md-12'>
																<ul class='list'>
																	<li><i class='fa fa-star'></i></li>
																	<li><i class='fa fa-star'></i></li>
																	<li><i class='fa fa-star'></i></li>
																	<li><i class='fa fa-star'></i></li>
																	<li><i class='fa fa-star'></i></li>
																</ul>
															</div>
															<span class='price'>
																<p><strong><em class='item_price'> RM ".$row['product_price']."</em></strong></p>
																<div class='block'>
																	<div class='starbox small ghosting'> </div>
																</div>
																<div class='clearfix'></div>
															</span>
															<div class='add add-2'>
															<button class='btn btn-danger my-cart-btn my-cart-b' href='product.php?product=".$row['product_id']."'>View Product</button>
															</div>
														</a>
													";
						    }
						    if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
							if($inc == 2) echo "<div class='col-sm-4'></div></div>";
						}
						catch(PDOException $e){
							echo "There is some problem in connection: " . $e->getMessage();
						}
		       		?>
						</div>
					</div>
			</div>
		</div>
	</main>
  
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