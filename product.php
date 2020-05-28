<?php
session_start();
// Include functions and connect to the database using PDO MySQL
	include 'functions.php';
	$slug = $_GET['product'];
	$pdo = pdo_connect_mysql();
	$stmt = $pdo->query("SELECT *, products.product_title, categories.cat_title, products.product_id  FROM products LEFT JOIN categories ON categories.cat_id=products.cat_id where product_id = $slug");
	$product = $stmt->fetch();

?>

<?=template_header('Product')?>

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
	
	
		<div class="product content-wrapper">
			<div class="preview col-md-6">	
				<img src="<?php echo (!empty($product['product_image'])) ? 'images/'.$product['product_image'] : 'images/noimage.jpg'; ?>" width="100%" height="650" class="zoom" data-magnify-src="images/large-<?php echo $product['product_image']; ?>">
			</div>
			<div class="col-md-6 mb-4">
				<h1 class="name"><?=$product['product_title']?></h1>
				
				<?php 
					if(isset($_SESSION['loggedin'])){
						include'admin/ratings.php';
					}
				?>
				
				<h3><b><em class="item_price"> RM <?php echo number_format($product['product_price'], 2); ?></em></b></h3>
				
				<hr>
				
				<p><b>Category:</b>  <?=$product['cat_title']?></p>
				
				<p><b>Description:</b></p>
				
				<div class="description">
					<?=$product['product_desc']?>
				</div>
				
				<hr>
				
				<div class="certified">
					<ul>
						<li><strong>Delivery time</strong><span>7 Working Days</span></li>
						<li><strong>Certified</strong><span>Quality Assured</span></li>
					</ul>
				</div>
				
				<hr>
				
				<form action="index.php?page=cart" method="post">
					<h5 ><strong>Quantity:</strong></h5>
					<input type="number" name="quantity" value="1" min="1" max="<?=$product['product_qty']?>" placeholder="Quantity" required>
					<input type="hidden" name="product_id" value="<?=$product['product_id']?>">
					<input type="submit" value="Add To Cart">
				</form>
				
			</div>
		</div>
		
		<hr>

		<!--Grid row-->
		
		<!--Grid row-->
		
		 <div class="row d-flex justify-content-center wow fadeIn">
			<!--Grid column-->
				<h2 class="my-4 h4">REVIEWS</h2>
			<!--Grid column-->
		</div>
		
	 <div class="container">
		  
		  
			<?php

				if(isset($_SESSION['loggedin'])){

					echo '
					<form method="POST" id="comment_form">
				<div class="form-group">
				 <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
				</div>
				<div class="form-group">
				 <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
				</div>
				<div class="form-group">
				 <input type="hidden" name="comment_id" id="comment_id" value="0" />
				 <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
				</div>
				
			   </form>
			   
			 
				';
					
				}
			?>
			
		   
		   
		   <?php
			include_once 'db.php';

			$sql_sel = "SELECT * FROM tbl_comment ORDER BY comment_id DESC";
			$result = $con->query($sql_sel);
			$count = $result->num_rows;

				if($count > 0) {
			?>
        <div id="comment-count" style="text-align: right;">
        <span id="count-number"><?php echo $count;?></span> Comment(s)
        </div>
		<?php } ?>
		
		<?php

				if(isset($_SESSION['loggedin']) || !isset($_SESSION['loggedin'])){

					echo '
			
			<span id="comment_message"></span>
			<br />
				<div id="display_comment"></div> '; } ?>
		  
		  </div>


	</div>
		<!--Grid row-->



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
	
<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
	 if($("#count-number").length > 0) {
                             var currentCount = parseInt($("#count-number").text());
                             var newCount = currentCount + 1;
                             $("#count-number").text(newCount)
                         }
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
	
   }
  })
 }


 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>
	
</body>
</html>



