<?php session_start(); ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar1.php"); ?>
<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Customers</h2>
      	</div>
      </div>
      
      <?php 

  require 'config.php';
   if (isset($_SESSION['admin_id'])) {
          $userLoggedIn = $_SESSION['admin_id'];
          $result = mysqli_query($con,"SELECT first_name, last_name, email, mobile, address1 FROM user_info");

            echo "<table class='table table-striped table-sm'>
            <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
            </tr>";

            while($row = mysqli_fetch_array($result))
            {
            echo "<tr>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['mobile'] . "</td>";
            echo "<td>" . $row['address1'] . "</td>";
			echo "</tr>";
            }
            echo "</table>";                                                                    
}
  else {
  //header("Location: index.php");
  }




   ?>
  </div>
</div>

<!-- Modal -->

<?php include_once("./templates/footer.php"); ?>



<script type="text/javascript" src="./js/customers.js"></script>