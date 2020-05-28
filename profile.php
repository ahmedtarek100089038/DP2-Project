
<?php
session_start();

// Include functions and connect to the database using PDO MySQL
include 'db.php';
include 'functions.php';

if(!isset($_SESSION['loggedin'])){
	header('Location: index.php');
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT first_name, last_name, email, password, mobile, address1, photo FROM user_info WHERE user_id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['user_id']);
$stmt->execute();
$stmt->bind_result($first_name, $last_name, $email, $password, $mobile, $address1, $photo);
$stmt->fetch();
$stmt->close();


if(isset($_SESSION['user_id'])){
		$con = mysqli_connect("localhost", "root", "", "craftpophouse_db"); //Connection variable
		$pdo = pdo_connect_mysql();
		$stmt = $pdo->prepare("SELECT * FROM user_info WHERE user_id=:user_id");
		$stmt->execute(['user_id'=>$_SESSION['user_id']]);
		$loggedin = $stmt->fetch();
		
	}
	

?>




<?=template_header('profile')?>


<!DOCTYPE html>

<html lang="en">

	<!-- Description: SWE30010 DEVELOPMENT PROJECT 2-DESIGN, PLANNING AND MANAGEMENT  -->
	<!-- Page: Login Page (login.php) -->
	<!-- Author: DP2 -->
	<!-- Date: 25/4/2020 -->
	
	<!-- =========HEAD STARTS HERE========= -->
<head>
    <title>Craft Pop House | Profile Page</title>
    <meta charset="utf-8">
    <meta name="author" content="DP2">
    <meta name="description" content="Craft Pop House Login Page">
    <meta name="keywords" content="Login Page, craft pop house">
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
	
	<div class="container">
		
		<div class="profile content-wrapper">
			
			
		
		
			<h1>Profile Page</h1>
			
				
				
				
			<div class="col-md-12">
				<img src="<?php echo (!empty($loggedin['photo'])) ? 'images/'.$loggedin['photo'] : 'images/profile.jpg'; ?>" class="profile-image">
			</div>
			
			<p>Your account details are below:</p>
			<?php
								if(isset($_SESSION['error'])){
									echo "
										<div class='callout callout-danger btn btn-danger'>
											".$_SESSION['error']."
										</div>
									";
									unset($_SESSION['error']);
								}

								if(isset($_SESSION['success'])){
									echo "
										<div class='callout callout-success btn btn-success'>
											".$_SESSION['success']."
										</div>
									";
									unset($_SESSION['success']);
								}
					?>
			<span class="pull-right">
				<a href="#edit" class="btn btn-danger btn-flat btn-sm" data-toggle="modal"><i class="fa fa-edit"></i> Edit</a>
	        </span>
			
			<table>
				
				<tbody>
					<tr>
						<td>Name:</td>
						<td><?php echo $loggedin['first_name'].' '.$loggedin['last_name'];?></td>
					</tr>
						
					
					<br />
					<tr>
						<td>Email:</td>
						<td><?php echo $loggedin['email']; ?></td>
					</tr>
					
					<tr>
						<td>Password:</td>
						<td><?php echo $loggedin['password']; ?></td>
					</tr>
					
					<tr>
						<td>Phone Number:</td>
						<td><?php echo $loggedin['mobile']; ?></td>
					</tr>
						
					<tr>
						<td>Address:</td>
						<td><?php echo $loggedin['address1']; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	
	

	<!-- PHP to launch Footer -->
		<?php	
			include_once'footer.php';
		?>
		<?php include 'profile_modal.php'; ?>
		
	<!-- jQuery – required for Bootstrap's JavaScript plugins) --> 
    <script src="frameworks/js/jquery.min.js"></script>
	<!--All bootstrap plug in file -->
	<script src="frameworks/js/bootstrap.min.js"></script> 
	<!-- //for bootstrap working -->
	<script type='text/javascript' src="frameworks/js/jquery.shop.js"></script>
	
</body>
</html>