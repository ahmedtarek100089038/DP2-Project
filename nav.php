	<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
		<a href="index.php"><img class="navbar-brand" src="images/logo.png" style="max-width: 50%;" alt="logo" /></a>
		
		<button class="navbar-toggler"  data-toggle="collapse" data-target="#collapse_navbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="collapse_navbar">
			<ul class="navbar-nav ml-auto">  
				<li class="nav-item active">
					<a class="nav-link" href="index.php"><i class="fa fa-home" style="font-size: 20px;"></i></a>
				</li>
				<li class="navbar-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_categories" href="#">
					Categories
					<span class="carrot"></span>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdown_categories">
						<a class="dropdown-item" href="product1.php">Clothing</a>
							<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="product2.php">Jewellery</a>
							<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="product3.php">Soft Toys</a>
							<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="product4.php">Handmade Items</a>
							<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="product5.php">Room Decor</a>
							<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="product6.php">Vintage Goods</a>
					</div>
				</li>
				<li class="navbar-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_about" href="#">
					About
					<span class="carrot"></span>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdown_categories">
						<a class="dropdown-item" href="about.php">About Us</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="developers.php">Developers</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contactus.php">Contact Us</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="faq.php">FAQ</a>
				</li>
				<li class="navbar-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_support" href="#">
					Support
					<span class="carrot"></span>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdown_support">
						<a class="dropdown-item" href="termsandconditions.php">Terms and Conditions</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Feedback</a>
					</div>
				</li>	
			</ul>
			
			<div class="cart ml-auto">
				<a href="cart.php"><span class="fa fa-shopping-cart my-cart-icon"></span></a>
			</div>
			
			<ul class="navbar-nav ml-auto"> 
				<li class="navbar-item dropdown active">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_about" href="#">
						<i class="fa fa-user" aria-hidden="true"></i>   Register/Login
						<span class="carrot"></span>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdown_categories">
						<a class="dropdown-item " href="register.php">Register</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="login.php">Login</a>
					</div>
				</li>	
			</ul>	
		</div>
	</nav>