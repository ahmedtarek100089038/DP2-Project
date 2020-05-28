	<footer class="py-5 bg-dark">
		<div class="footerwrap">	<!-- Footer Navigation -->
			<div class="footer_logo">	<!-- Footer Logo (navigate to homepage) -->
				<a href="index.php"><img src="images/logo.png" alt="Logo"/></a>
			</div>
			<div class="col-lg-4 col-md-6 column one">	<!-- column 1 -->
				<ul>
					<li><p class="strong"> Categories </p></li>
					<?php
					 
						$pdo = pdo_connect_mysql();
						try{
						  $stmt = $pdo->prepare("SELECT * FROM categories");
						  $stmt->execute();
						  foreach($stmt as $row){
							echo "
							  <li><a href='category.php?category=".$row['cat_slug']."'>".$row['cat_title']."</a></li>
					
							";                  
						  }
						}
						catch(PDOException $e){
						  echo "There is some problem in connection: " . $e->getMessage();
						}


					  ?>
				</ul>
			</div>
			
			<div class="col-lg-4 col-md-6 column two">	<!-- column 2 -->
				<ul>
					<li><p class="strong"> About </p></li>
					<li><a href="about.php"> About Us </a></li>
					<li><a href="developers.php"> Developers </a></li>
				</ul>
			</div>
			
			<div class="col-lg-4 col-md-6 column two">	<!-- column 3 -->
				<ul>
					<li><p class="strong"> Support </p></li>
					<li><a href="termsandconditions.php"> Terms & Conditions </a></li>
					<li><a href="faq.php"> FAQ </a></li>
					<li><a href="feedback_form.php"> Feedback </a></li>
				</ul>
			</div>
			
			<div class="col-lg-4 col-md-6 footer-newsletter">
				<h5>Join Our Newsletter</h5>
				<form method="post" action="subscribe-to-email.php" name="sendmailsubscribe">
					<input type="email" name="email"><input type="submit" name="submit" value="Subscribe">
				</form>
			</div>
		</div>
		
		<div class="bottom">	<!-- Page Information -->
			<p> &copy; Copyright <strong><span>Craft Pop House</span></strong>. All Rights Reserved <br/> Last Updated: 28/05/2020</p>
		</div>
	</footer>