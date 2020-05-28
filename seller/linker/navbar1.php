 <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
<a class="navbar-brand mr-0" href="../index.php"><img style="margin-left:25px;margin-right:25px;" height="35" width="50" src="../images/logo.png"></a>
 
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
    	<?php
    		if (isset($_SESSION['seller_id'])) {
    			?>
    				<a class="nav-link" href="../seller/seller-logout.php"><p style="color:white;margin-top:10%;font-size:15px;" alt="click here to sign off">Hi: <?php echo $_SESSION["seller_name"]; ?></p></a>
    			<?php
    		}else{
    			$uriAr = explode("/", $_SERVER['REQUEST_URI']);
    			$page = end($uriAr);
    			if ($page === "login.php") {
    				?>
	    				<a class="nav-link" href="../seller/register.php">Register</a>
	    			<?php
    			}else{
    				?>
	    				<a class="nav-link" href="../seller/login.php">Login</a>
	    			<?php
    			}


    			
    		}

    	?>
      
    </li>
  </ul>
</nav>
