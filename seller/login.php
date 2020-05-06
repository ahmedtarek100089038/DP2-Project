<?php include "./linker/top.php"; ?>

<?php include "./linker/navbar.php"; ?>

<div class="container">
	<div class="row justify-content-center" style="margin:100px 0;">
		<div class="col-md-4">
			<h4>Seller Login</h4>
			<p class="message"></p>
			<form id="seller-login-form">
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" class="form-control" name="email" id="email"  placeholder="Enter email">
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
			  </div>
			  <input type="hidden" name="seller_login" value="1"> 
			  <button type="button" class="btn btn-primary login-btn">Submit</button>
			  <!--<a href="index.php" class="btn btn-primary btn-md my-0 p">Submit</a>-->
			</form>
		</div>
	</div>
</div>





<?php include "./linker/footer.php"; ?>

<script type="text/javascript" src="./js/main.js"></script>
