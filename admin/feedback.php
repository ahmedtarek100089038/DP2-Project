<?php session_start(); ?>
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar1.php"); ?>

<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

	<div class="row">
      	<div class="col-10">
      		<h2>Buyer's Feedback</h2>
      	</div>
      </div>
	  
	  <hr>
	  
 <?php 

  require 'config.php';
   if (isset($_SESSION['admin_id'])) {
          $userLoggedIn = $_SESSION['admin_id'];
          $result = mysqli_query($con,"SELECT * FROM poll");

            echo "<table class='table table-striped table-sm'>
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>feedback</th>
            <th>Suggestions</th>
            </tr>";

            while($row = mysqli_fetch_array($result))
            {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['feedback'] . "</td>";
            echo "<td>" . $row['suggestions'] . "</td>";
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
  
<?php include "./templates/footer.php"; ?>

